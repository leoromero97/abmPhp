
<html>
<head>
<font color="white">
<body bgcolor=#1D6B89>
<title>Productos por marca</title>
<html>
  <head>
    <meta charset="utf-8">  
    <style>
  * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  background-color: #c3c2c2;
  font-family: 'Montserrat', sans-serif;
  color: #fff;
  color: #a0a0a0;
  color: #d23557;
  color: #121212;
}

body {
  width: 100%;
  padding: 20px;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  text-align: center;
}

input {
  border: #d23557 2px solid;
  border-radius: 6px;
  background: #121212;
  color: #fff;
  padding: 10px;
  outline-style: none;
}
  .formulario {
  border: 2px solid black;
  border-radius: 10px;
  background-color: #121212;
  height: 600px;
  width: 80%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-evenly;
  box-shadow: 0 0 10px #121212;
}

.button {
  background-color: #d235575e;
  width: 220px;
  font-size: 18px;
  font-weight: 600;
  cursor: pointer;
} 

.button:hover {
  background-color: #d23557;
}
</style>
   </head>
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
<a href="https://repartear.com/abmPhp/" class="button">Volver</a>

</body>
</html>