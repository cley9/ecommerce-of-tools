
<?php
//error_reporting( ~E_NOTICE );
include("model/cn.php");
// COMBAK: -------------------------------------------------------------> Funcion agregar
//----------------------Variabels Globales
	 	$response=array();
	if(isset($_POST['btnsave'])){
		$username = $_POST['producto_name'];// user name
		$userjob = $_POST['producto_pre'];// user email
		$imgFile = $_FILES['producto_image']['name'];
		$tmp_dir = $_FILES['producto_image']['tmp_name'];
		$imgSize = $_FILES['producto_image']['size'];
		if (!empty($username)) {
			// code...
?><script type="text/javascript">
	alert('agregue un producto');
	</script><?php

		}
		if(empty($imgFile)){//si esta vacia
			$errMSG = "Seleccione el archivo de imagen.";
		}
		else{
			$upload_dir = 'imagenes/'; // directory
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension  ,tipo de extencsion
			$valid_extensions = array('jpeg','jpg','png','gif','jfif','webp'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions)){// allow valid image file formats
				move_uploaded_file($tmp_dir,$upload_dir.$userpic);
			}
		}
		if(!isset($errMSG)){	// if no error occured, continue ....
			$stmt = $DB_con->prepare('INSERT INTO tbl_producto(db_nombre,db_precio,db_imagen) VALUES(:uname, :ujob, :upic)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);//el bindParam no permine 2 tipos de valores de id
			if($stmt->execute()){// es para insertar data y condicion
					$successMSG = "Nuevo registro insertado correctamente ...";
				//$_SESSION['message_']='Producto  Agregado correctamente';
				//	$_SESSION['mensaje_type_']='success';
		//	header("refresh:1;user_admin.php");// lulgar a donde redireccionara,0 secon
			?> <h1 id="d">agregado </h1> <?php
					header('Location: user_admin.php');
			}
		}
	}

// COMBAK: -------------------------------------------------------------> Funcion delete
// Condicional para validar el borrado de la imagen

//session_start();
if(isset($_GET['delete_id'])){	// Selecciona imagen a borrar
//	if(isset($_POST['delete_id'])){	// Selecciona imagen a borrar
/*
	$stmt_select = $DB_con->prepare('SELECT db_imagen FROM tbl_producto WHERE db_id =:uid');
	$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
	$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
*/


// ------------

$stmt_select = $DB_con->prepare('DELETE FROM tbl_producto WHERE db_id =:uid');
$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);



	 ?> 	<script type="text/javascript">
	 // alert('quierare');
	 </script> <?php
		/*if () {
			// code...
			unlink("imagenes/".$imgRow['db_imagen']);// Ruta de la imagen
			// Consulta para eliminar el registro de la base de datos
			$stmt_delete = $DB_con->prepare('DELETE FROM tbl_producto WHERE db_id =:uid');
			$stmt_delete->bindParam(':uid',$_GET['delete_id']);
			$stmt_delete->execute();
		} else {
			// code...
		}*/


/*
	$_SESSION['message_']='Producto Eliminado';
	$_SESSION['mensaje_type_']='danger';*/
	header("Location:user_admin.php");// Redireccioa al inicio
}

// COMBAK: -------------------------------------------------------------> Funcion update

session_start();
if (!isset($_SESSION['nombre'])) {
	header('Location: login.php');
}
elseif(isset($_SESSION['nombre'])){
if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
	$id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT db_nombre, db_precio, db_imagen FROM tbl_producto WHERE db_id =:uid');
	$stmt_edit->execute(array(':uid'=>$id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
}
else{//la redireccion para que no se duplique al actualiar
	header("Location: user_admin.php");
}
if(isset($_POST['btn_save_updates'])){
	$username_ = $_POST['producto_name'];// user name
	$userjob_ = $_POST['producto_pre'];// user email
	$imgFile = $_FILES['producto_image']['name'];
	$tmp_dir = $_FILES['producto_image']['tmp_name'];
	$imgSize = $_FILES['producto_image']['size'];
		if($imgFile){
		$upload_dir = 'imagenes/'; // upload directory 77 DIRECCION  de la ruta de carperta
		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		$valid_extensions = array('jpeg','jpg','png','gif','jfif','webp'); // valid extensions
		$userpic = rand(10,1000000).".".$imgExt;// esto es el codigo de eliminacion de ruta de img
		if(in_array($imgExt, $valid_extensions)){
			unlink($upload_dir.$edit_row['db_imagen']);
			move_uploaded_file($tmp_dir,$upload_dir.$userpic);
		}
		else{ $errMSG = "Solo archivos JPG, JPEG, PNG & GIF .";}
	}else{// if no image selected the old image remain as it is.
		$userpic = $edit_row['db_imagen']; // old image from database
	}
	if(!isset($errMSG)){// if no error occured, continue ....

		$stmt = $DB_con->prepare('UPDATE tbl_producto SET db_nombre=:uname,db_precio=:ujob,	db_imagen=:upic
		WHERE db_id=:uid');
		$stmt->bindParam(':uname',$username_);
		$stmt->bindParam(':ujob',$userjob_);
		$stmt->bindParam(':upic',$userpic);
		$stmt->bindParam(':uid',$id);
		if($stmt->execute()){
			?>

<?php
header('location:user_admin.php');
}		else{$errMSG = "Los datos no fueron actualizados !";}
	}

}
}
//----------------------------------------------------------------------------  Login Proceso
if (isset($_POST['user_login_'])) {
	session_start();
	require('model/cn.php');
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];
	/*
	$nombre='cley';
	$password='230318';*/
	$contador = 0;
	//preparo la consulta SQL//$resultado va hacer el $stmt
	$stmt=$DB_con->prepare("SELECT * FROM tbl_user WHERE db_user_name = :nombre");
	//ejecucion de la consulta
	$stmt->execute(array(":nombre"=>$usuario));//$db_user_name
	//resultado en un array asociativo tipo while
//$dato=$stmt->fetch(PDO::FETCH_ASSOC);
//$_SESSION['nombre'] =rowCount()->db_user_name;
	while($row_login=$stmt->fetch(PDO::FETCH_ASSOC)) {
	//while($row_login->$dato) {
	if(password_verify($contrasena, $row_login['db_user_password'])) {
		$_SESSION['nombre'] =$row_login['db_user_name'];

	$contador++;
	}
		 }
		 if ($contador > 0) {
		echo "el usuario existe";

			$response['status']  = 'success';
			$response['message'] = 'Producto eliminado correctamente...';

		 header('Location: user_admin.php');
		}
		else {
		 echo "el usuario no existe";
		 $_SESSION['message']='Usuario no valido';
		 $_SESSION['mensaje_type']='danger';
		}
	//cierro la conexion
	//$conexion = null;
}
//----------------------------------------------------------------------------  cerrar sesion
if (isset($_GET['exit'])) {
	session_start();
	session_destroy(); // session_unset();
	header('Location:login.php');
}



 ?>
