<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","c1950135_stock","doneraBU68","c1950135_stock") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion, "select nombre from agenda
                        where nombre='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
  mysqli_query($conexion,"delete from agenda where nombre='$_REQUEST[nombre]'") or
    die("Problemas en el select:".mysqli_error($conexion));
  echo "Se ha borrado el producto.";
}
else
{
  echo "No existe un producto con ese nombre.";
}
mysqli_close($conexion);
?>
<form method="get" action="https://repartear.com/abm2/">
  <input type="submit" value="Volver" />
  </form>
</body>
</html>