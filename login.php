<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Acceso de Usuarios</title>
 </head>
 <body>
   <form action="verificar.php" method="post">
    <legend>Entrar</legend>
    <div>
     <label for="nombre">Nombre</label>
     <input type="text" name="nombre">
    </div>
    <div>
     <label for="password">Password</label>
     <input type="password" name="password">
    </div>
    <div>
     <input type="submit" value="Entrar">
    </div>
   </form>
 </body>
</html>