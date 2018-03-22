<?php
include 'encriptacion.php';
require 'generarkeys.php';

GenerarKeys::genPrivKey('privada',2048);

//$encriptar = Encriptar::encripssl("itsur");

//$encriptar = Encriptar::encrip("itsur");

$encriptar = Encriptar::encripasinc("itsur");

echo "encriptado: " . $encriptar;

echo "<br>";

//$desencriptar = Encriptar::desencripssl($encriptar);
$desencriptar = Encriptar::desencrip($encriptar);


echo "desencriptado: " . $desencriptar;

?>
