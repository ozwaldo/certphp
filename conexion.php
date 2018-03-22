<?php 
 class Conexion{
   public static function conectar($bd){
     $con = mysql_connect('localhost','root','root');
     
     mysql_select_db($bd);
     return $con;
   }
 }

 //echo Conexion::conectar("seguridad");

?>