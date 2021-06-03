<?php

include('model/cn.php');
// COMBAK: -------------------------------------------------------------> Funcion update

session_start();


if (!isset($_SESSION['nombre'])) {
	header('Location: login.php');
}
elseif(isset($_SESSION['nombre'])){


if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
//if(isset($_GET['edit_id']){
	//include 'model/cn.php';




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
		$valid_extensions = array('jpeg','jpg','png','gif','jfif'); // valid extensions
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
    <script>//	alert('Editado correctamente ...');
			window.location.href='user_admin.php';// redirecionamiento con js
		</script>
<?php
}		else{$errMSG = "Los datos no fueron actualizados !";}
	}
}
}


 ?>
