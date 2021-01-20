<html>
<head>
  <title>Modificar</title>
  <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        background-color: #c3c2c2;
        font-family: 'Montserrat', sans-serif;
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

mysqli_query($conexion, "update agenda
                          set nombre='$_REQUEST[nombrenuevo]' 
                        where nombre='$_REQUEST[nombreviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "El nombre fue modificado con exito";
?>
<br>
  <a href="https://repartear.com/abmPhp/" class="button">Volver</a>
</body>
</html>