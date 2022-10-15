<?php
       print_r($_REQUEST);
       print "<p>Su nombre es $_REQUEST[Usuario]</p>\n";
       print("<br>Su clave es ". $_REQUEST['Clave']);
       print("<h1>Su edad es ". $_REQUEST['Edad']);
       print("<h1>");

 print("<br><h3>OPCION 1: Se imprime los Headers: </h3><br>");
 var_dump($_SERVER);
?>

<?php
 print("<br><h3>OPCION 2: Se usa la función getallheaders: </h3><br>");
 foreach (getallheaders() as $name => $value) {
     echo "$name: $value <br>";
 }
?> 

<h3>OPCION 3: Demostrando Header Http con Lenguaje Php</h3>
<?php
 $header = apache_request_headers();
 foreach ($header as $headers => $value) {
    echo "$headers: $value <br/>\n";
 }
?>

