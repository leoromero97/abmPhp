
<html>
<head>
<title>Listado de Productos</title>
<html><head><meta charset="utf-8"> </head>
<body>
<h1> Resultado de la Consulta de Tabla Productos </h1>

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
    die("Problemas con la conexión");  //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

mysqli_select_db($link, "c1950135_stock");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tíldes correctamente
$result = mysqli_query($link, "SELECT * FROM agenda");
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