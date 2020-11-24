<html>
<head>
<title>Consulta</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","c1950135_stock","doneraBU68","c1950135_stock") or
    die("Problemas con la conexión");

    $registros=mysqli_query($conexion,"select * from agenda where nombre='$_REQUEST[nombre]'") or
    die("Problemas en el select:".mysqli_error($conexion));
  
    if ($reg=mysqli_fetch_array($registros))
    {
      echo "Nombre: ".$reg['nombre']."<br>";
      echo "Marca: ".$reg['marca']."<br>";
      echo "Precio: ".$reg['precio']."<br>";
      echo "Stock: ".$reg['stock']."<br>";
    }
    else
    {
      echo "No existe el producto.";
    }
    mysqli_close($conexion);
?>
<br>
<br>
<form method="get" action="https://repartear.com/abm2/">
  <input type="submit" value="Volver" />
  </form>
</body>
</html>