<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Registro de Usuarios</title>
 </head>
 <body>
   <form action="usuario.php" method="post">
    <legend>Registro</legend>
    <div>
     <label for="nombre">Nombre</label>
     <input type="text" name="nombre">
    </div>
    <div>
     <label for="password">Password</label>
     <input type="password" name="password">
    </div>
    <div>
     <input type="submit" value="Guardar">
    </div>
   </form>
 </body>
</html>