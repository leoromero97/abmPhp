<html>
  <html>
    <head>
      <title>Alta de Producto</title>
    </head>
    <body>
      <?php
      $conexion=mysqli_connect("localhost", "c1760695_stock", "naroNEfe11", "c1760695_stock") or
      die("Problemas con la conexión")

      mysqli_connect($conexion, "insert into agenda(nombre, marca, precio, stock) values
      ('$_REQUEST[nombre]', '$_REQUEST[marca]', $_REQUEST[precio], $_REQUEST[stock])")
      or die("Problemas en el select".mysqli_error($conexion));

      mysqli_close($conexion);

      echo "El producto fue dado de alta";
      ?>
      <form method="get" action="http://gerbacio.ml/">
        <input type="submit" value="Volver">
      </form>
    </body>
  </html>
</html>