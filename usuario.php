<?php
 require_once'conexion.php';
 require_once'encriptacion.php';

 $nombre = $_POST['nombre'];
 $password = $_POST['password'];

 /*echo "nombre: ".$nombre;
 echo "<br>";
 echo "password: ".$password;*/

$encriptar = Encriptar::encripssl($password);

echo $encriptar . "<br>";

$registrar = "INSERT INTO usuario VALUES(      NULL, '".$nombre."','".$encriptar."')";

echo $registrar;
Conexion::conectar("seguridad");
mysql_query($registrar);

?>
