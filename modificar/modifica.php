<html>
<head>
<title>Modificar</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","c1950135_stock","doneraBU68","c1950135_stock") or
    die("Problemas con la conexión");

mysqli_query($conexion, "update agenda
                          set nombre='$_REQUEST[nombrenuevo]' 
                        where nombre='$_REQUEST[nombreviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "El nombre fue modificado con exito";
?>
<br>
<form method="get" action="https://repartear.com/abm2/">
  <input type="submit" value="Volver" />
  </form>
</body>
</html>