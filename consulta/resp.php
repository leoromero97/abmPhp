<html>
<head>
  <title>Consulta</title>
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
    
    .button {
      background-color: #d235575e;
      width: 220px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
    } 
    
    .button:hover {
      background-color: #d23557;
    }
  </style>
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
    <a href="https://repartear.com/abmPhp/" class="button">Volver</a>
  </body>
</html>