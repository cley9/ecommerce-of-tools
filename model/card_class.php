<?php session_start();
class Cart {
    protected $cart_contents = array();

    public function __construct(){

// obtener la matriz del carrito de la compra de la sesión
        $this->cart_contents = !empty($_SESSION['cart_contents'])?$_SESSION['cart_contents']:NULL;
		if ($this->cart_contents === NULL){

// establecer algunos valores base
			$this->cart_contents = array('cart_total' => 0, 'total_items' => 0);
		}
    }

    /**
	 * Contenido del carrito: devuelve toda la matriz del carrito.

	 * @param	bool
	 * @return	array
	 */
	public function contents(){
    // Reorganizar la más nueva primero(femenino)

		$cart = array_reverse($this->cart_contents);

    // elimínelos para que no creen un problema al mostrar la tabla del carrito
		unset($cart['total_items']);
		unset($cart['cart_total']);

		return $cart;
	}

    /**
    * Obtener artículo del carrito: devuelve los detalles de un artículo específico del carrito
	 * @param	string	$row_id
	 * @return	array
	 */
	public function get_item($row_id){
		return (in_array($row_id, array('total_items', 'cart_total'), TRUE) OR ! isset($this->cart_contents[$row_id]))
			? FALSE
			: $this->cart_contents[$row_id];
	}

    /**
    * Total de artículos: devuelve el recuento total de artículos.
	 * @return	int
	 */
	public function total_items(){
		return $this->cart_contents['total_items'];
	}

    /**
    * Total del carrito: devuelve el precio total
	 * @return	int
	 */
	public function total(){
		return $this->cart_contents['cart_total'];
	}

    /**
    * Inserte artículos en el carrito y guárdelo en la sesión
	 * @param	array
	 * @return	bool
	 */
	public function insert($item = array()){
		if(!is_array($item) OR count($item) === 0){
			return FALSE;
		}else{
            if(!isset($item['id'], $item['name'], $item['price'], $item['qty'])){
                return FALSE;
            }else{
                /*
                 * Insert Item
                 */
                // preparar la cantidad

                $item['qty'] = (float) $item['qty'];
                if($item['qty'] == 0){
                    return FALSE;
                }
                // preparar el precio

                $item['price'] = (float) $item['price'];

  // crea un identificador único para el artículo que se inserta en el carrito  arroz
                $rowid = md5($item['id']);
                // obtén la cantidad si ya está allí y agrégala
                $old_qty = isset($this->cart_contents[$rowid]['qty']) ? (int) $this->cart_contents[$rowid]['qty'] : 0;
                // volver a crear la entrada con un identificador único y una cantidad actualizada
                $item['rowid'] = $rowid;
                $item['qty'] += $old_qty;
                $this->cart_contents[$rowid] = $item;

                // guardar artículo del carrito
                if($this->save_cart()){
                    return isset($rowid) ? $rowid : TRUE;
                }else{
                    return FALSE;
                }
            }
        }
	}

    /**
	 * Update the cart
	 * @param	array
	 * @return	bool
	 */
	public function update($item = array()){
		if (!is_array($item) OR count($item) === 0){
			return FALSE;
		}else{
			if (!isset($item['rowid'], $this->cart_contents[$item['rowid']])){
				return FALSE;
			}else{
				// prep the quantity
				if(isset($item['qty'])){
					$item['qty'] = (float) $item['qty'];
          // eliminar el artículo del carrito, si la cantidad es cero
					if ($item['qty'] == 0){
						unset($this->cart_contents[$item['rowid']]);
						return TRUE;
					}
				}

        // encontrar claves actualizables
				$keys = array_intersect(array_keys($this->cart_contents[$item['rowid']]), array_keys($item));
        // prepara el precio
				if(isset($item['price'])){
					$item['price'] = (float) $item['price'];
				}
        // La identificación y el nombre del producto no deben cambiarse
				foreach(array_diff($keys, array('id', 'name')) as $key){
					$this->cart_contents[$item['rowid']][$key] = $item[$key];
				}
        // guardar los datos del carrito
				$this->save_cart();
				return TRUE;
			}
		}
	}

    /**
    * Guarde la matriz del carrito en la sesión
	 * @return	bool
	 */
	protected function save_cart(){
		$this->cart_contents['total_items'] = $this->cart_contents['cart_total'] = 0;
		foreach ($this->cart_contents as $key => $val){
      // asegúrese de que la matriz contenga los índices adecuados
			if(!is_array($val) OR !isset($val['price'], $val['qty'])){
				continue;
			}

			$this->cart_contents['cart_total'] += ($val['price'] * $val['qty']);
			$this->cart_contents['total_items'] += $val['qty'];
			$this->cart_contents[$key]['subtotal'] = ($this->cart_contents[$key]['price'] * $this->cart_contents[$key]['qty']);
		}

    // si el carrito está vacío, elimínelo de la sesión
		if(count($this->cart_contents) <= 2){
			unset($_SESSION['cart_contents']);
			return FALSE;
		}else{
			$_SESSION['cart_contents'] = $this->cart_contents;
			return TRUE;
		}
    }

    /**
    * Eliminar artículo: elimina un artículo del carrito
	 * @param	int
	 * @return	bool
	 */
	 public function remove($row_id){
     // desarmar y guardar
		unset($this->cart_contents[$row_id]);
		$this->save_cart();
		return TRUE;
	 }

    /**
    * Destruye el carro: vacía el carro y destruye la sesión
	 * @return	void
	 */
	public function destroy(){
		$this->cart_contents = array('cart_total' => 0, 'total_items' => 0);
		unset($_SESSION['cart_contents']);
	}
}
