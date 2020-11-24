
<html>
<head>
<font color="white">
<body bgcolor=#1D6B89>
<title>Productos por marca</title>
<html><head><meta charset="utf-8"> </head>
<body>
<body>
    <br>
    <div style="text-align: center">
    <h1>Consulta de Productos por marca</h1>
    </div>
    <br>
<?php

function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Código: ".$resultados['id']."<br/> ";
echo "- Nombre: ".$resultados['nombre']."<br/> ";
echo "- Marca: ".$resultados['marca']."<br/>";
echo "- Precio: ".$resultados['precio']."<br/>";
echo "- Stock: ".$resultados['stock']."<br/>";

echo "**********************************<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}

$link = mysqli_connect("localhost","c1950135_stock","doneraBU68","c1950135_stock") or
    die("Problemas con la conexión"); 

mysqli_select_db($link, "c1950135_stock");
$tildes = $link->query("SET NAMES 'utf8'");

$result = mysqli_query($link,"select * from agenda where marca='$_REQUEST[marca]'");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);
?>
<br>
<br>
<form method="get" action="https://repartear.com/abm2/">
  <input type="submit" value="Volver" />
  </form>

</body>
</html>