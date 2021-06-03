<?php
include('model/cn.php');
# Recuerda que nombre puede venir de cualquier lugar
$nombre = "clavo";
# Seleccionar el id para que sea ligero, pues no necesitamos obtener los datos, solamente
# queremos saber si existe
$stmt = $DB_con->prepare("SELECT db_id FROM tbl_producto WHERE db_nombre = ? LIMIT 1;");
$stmt->execute([$nombre]);

# Ver cuántas filas devuelve
$numeroDeFilas = $stmt->rowCount();
# Si son 0 o menos, significa que no existe
if ($numeroDeFilas <= 0) {
    echo "El usuario con nombre $nombre NO existe";
} else {
    echo "El usuario con nombre $nombre SÍ existe";
}

 ?>
