<html>
  <head>
    <title>Listado de Productos</title>
    <meta charset="utp-8">
  </head>
</html>

<body>
  <h1>Resultado de la Consulta de Tabla de Productos</h1>
  <?php
    function mostrarDatos ($resultados) {
      if ($resultados !=NULL) {
        echo "- Código: ".$resultados['Id']."<br/> ";
        echo "- Nombre: ".$resultados['nombre']."<br/> ";
        echo "- Marca: ".$resultados['marca']."<br/> ";
        echo "- Precio: ".$resultados['precio']."<br/> ";
        echo "- Stock: ".$resultados['stock']."<br/> ";

        echo "******************************<br/>"}
        else {echo "<br/>No hay más datos!!! <br/>";}
    }
    $link = mysqli_connect("localhost", "c1760695_stock", "naroNEfe11", "c1760695_stock") or
    die("Problemas con la conexión");

    mysqli_select_db($link, "b5000689_fer");
    $tildes = $link-
    >query("SET NAMES 'utp-8'");
    $result = mysqli_query($link, "SELECT * FROM agenda");
    while ($fila = mysqli_fetch_array($result)) {
      mostrarDatos($fila);
    }
    mysqli_free_result($result);
    mysqli_close($link);
  ?>
</body>