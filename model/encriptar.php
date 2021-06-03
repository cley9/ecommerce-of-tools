<?php
/*
$cn=mysqli_connect("localhost","root","","dba_ferreteria");

//$pass='dfdf';
$pass='230318';
$user='cley';
$quer_user="SELECT * FROM tbl_user WHERE db_user_name='$user' ";
$stmt_user=(mysqli_query($cn,$quer_user));
$row_user=mysqli_fetch_assoc($stmt_user);
if (empty($row_user['db_user_name'])) {
  // code...
  echo "no exite";
}else {
  $passDB=$row_user['db_user_password'];
  if (password_verify($pass,$passDB)) {echo "correcto";
    // code...
  } else {echo "login incorrecto";
    // code...
  }

}

*/

/*

$Localhost = 'localhost';
$Usuario_BD = 'root';
$Password_BD = '';
$Nombre_BD = 'dba_ferreteria';//php_imagenpdo
//$Nombre_BD = 'producto';//php_imagenpdo

try{
  $DB_con = new PDO("mysql:host={$Localhost};dbname={$Nombre_BD};charset=UTF8",$Usuario_BD,$Password_BD);
  $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "corecto <br>";

  //session_start();
	$usuario = 'jose';
	$contrasena = '2390';

  $stmt = $DB_con->query("SELECT db_user_name, db_user_password FROM tbl_user WHERE db_user_name='$usuario'" );
	//$stmt = $DB_con->prepare('SELECT * FROM tbl_user WHERE db_user_name= ? and  db_user_password= ?;');
	//$stmt->execute(password_verify($contrasena,$db_user_password));
  //$rs=$tr->query()
  $c=$stmt->rowCount();
  if ($c > 0) {
    // code...
        while ($row = $stmt->fetch()) {
          // code...
          $u_db=$row['db_user_name'];
          $pas_db=$row['db_user_password'];
        }

        if (password_verify($contrasena,$pas_db)) {session_start(); echo "correctodfdfdf";
          // code...
        } else {echo "login incorrecto dfdf";
          // code...
        }

  }

}
catch(PDOException $e){
  echo $e->getMessage();
}



^*/

require 'cn.php';
//try {
//verifico los datos del login
/*$nombre=htmlentities(addslashes($_POST['nombre']));
$password=htmlentities(addslashes($_POST['password']));
*//*
$nombre=$_POST['nombre'];
$password=$_POST['password'];*/

$nombre='cley';
$password='230318';
$contador = 0;
//preparo la consulta SQL//$resultado va hacer el $stmt
	session_start();
$stmt=$DB_con->prepare("SELECT * FROM tbl_user WHERE db_user_name = :nombre");
//ejecucion de la consulta
$stmt->execute(array(":nombre"=>$nombre));//$db_user_name
//resultado en un array asociativo tipo while
while($row_login=$stmt->fetch(PDO::FETCH_ASSOC)) {
if(password_verify($password, $row_login['db_user_password'])) {
/*aqui se podra crear sesiones*/

//echo "dfja";
//header('Location: ../user_admin.php');
$contador++;
}



   }
   if ($contador > 0) {
   echo "el usuario existe";
   //$_SESSION['nombre'] = $datos->db_user_name;
   //header('Location: ../user_admin.php');
   ?> <h1>Usuario valido </h1> <?php

   } else {echo "el usuario no existe";
   //header('Location: login.php');
   /*$_SESSION['message']='Usuario no valido';
   $_SESSION['mensaje_type']='danger';
   */
   ?> <h1>Usuario no valido </h1> <?php

   }

//cierro la conexion
$conexion = null;





/*
}
 catch(Exception $e) {
die($e->getMessage());
}
percy23sac
230318
*/


 ?>
