<html>
<html>
<head>
<title>Alta de productos</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","c1950135_stock","doneraBU68","c1950135_stock") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into agenda(nombre,marca,precio,stock) values 
                       ('$_REQUEST[nombre]','$_REQUEST[marca]',$_REQUEST[precio],$_REQUEST[stock])")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "El producto fue dado de alta.";

?>
<form method="get" action="https://repartear.com/abm2/">
  <input type="submit" value="Volver" />
  </form>
</body>
</html>