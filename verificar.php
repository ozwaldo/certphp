<?php
    require_once'conexion.php';
    require_once'encriptacion.php';

    $usuario = $_POST['nombre'];
    $password = $_POST['password'];

    $encriptar = Encriptar::encripssl($password);

    //$claro = Encriptar::desencrip("MTIzNA==");

    //echo "El password es: " . $claro;

    $sql = "SELECT * FROM usuario WHERE nombre='$usuario' AND password='$encriptar'";
    
    Conexion::conectar("seguridad");
    $resultado = mysql_query($sql);
    
    //echo $sql;
    
    if($row = mysql_fetch_array($resultado)){
        echo "<h1>Alumno encontrado</h1>";
    }else{
        echo "<h1>Error</h1>";
    }
?>