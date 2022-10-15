<?php 
   print("Esto es lenguaje PHP");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Desarrollo de Software en ambientes Cloud</title>
</head>

<body>
    <h1>Práctica 1</h1>
  <form action="procesar.php" method="post">
         <input type="text" name="Usuario" placeholder="Ingresa Usuario">
         <input type="text" name="Clave" placeholder="Ingresar Clave">      
         <input type="text" name="Edad" placeholder="Ingresar Edad">
         <input type="submit" name="Enviar" value="Guardar">
  </form>
  <h3>UNL - Desarrollo de Software en ambientes Cloud</h3>
</body>
</html>
<?php 
  setcookie("CookieCorreoDSwAC","janneth.guaman@hotmai.com", time()+1);
  if(count($_COOKIE)>0)
  {
       print ("<br>No puedo almacenar cookies porque ya existe");
  }
  else
  {
       print ("<br>Se almacena la cookie");
  }
?>