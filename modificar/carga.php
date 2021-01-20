<html>
<head>
<title>Modificar</title>
</head>
<body>

<?php

$conexion=mysqli_connect("localhost","c1950135_stock","doneraBU68","c1950135_stock") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select * from agenda
                        where nombre='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="modifica.php" method="post">
Ingrese nuevo nombre:
<input type="text" name="nombrenuevo" value="<?php echo $reg['nombre'] ?>">
<br>
<input type="hidden" name="nombreviejo" value="<?php echo $reg['nombre'] ?>">
<input type="submit" value="Modificar">
</form>

<?php
}
else
  echo "No existe el producto";
?>
<br>
  <a href="https://repartear.com/abmPhp/" class="button">Volver</a>
</body>
</html>