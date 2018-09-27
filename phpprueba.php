<?php

//phpinfo();
echo("ingesando a la funcionalidad de conexión de BD<br>");
$enlace = mysqli_connect("199.79.62.243", "manzover_root", "Cangrejo76");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL.".PHP_EOL;
    echo "errno de depuración: ".mysqli_connect_errno().PHP_EOL;
    echo "error de depuración: ".mysqli_connect_error().PHP_EOL;
    exit;
}else{
    $db = mysqli_select_db( $enlace,"manzover_xiontech");
    $consulta = "SELECT * FROM post";
    $resultado = mysqli_query( $enlace, $consulta ) ;
    echo "<table borde='2'>";

 echo "<tr>";

 echo "<th>Titulo</th>";

 echo "<th>Contenido</th>";

 echo "</tr>";

 

 while ($columna = mysqli_fetch_array( $resultado ))

 {

  echo "<tr>";

  echo "<td>" . $columna["title"] . "</td><td>" . $columna["content"] . "</td>";

  echo "</tr>";

 }





 echo "</table>";
}

?>