<?php
echo('ingesando a la funcionalidad de conexión<br>');
// Conectando, seleccionando la base de datos


$usuario = "manzover";
$contrasena = "mo12345";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "199.79.62.243:3306";
$basededatos = "manzover_xiontech";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos)or die ("No se ha podido conectar al servidor de Base de datos").mysqli_error();
/*
$conexion = mysqli_connect( $servidor, $usuario, $contrasena) 
or die ("No se ha podido conectar al servidor de Base de datos").mysqli_error();*/

echo("AQUI VOY 000 <br>");

$db = mysqli_select_db( $conexion, $basededatos);
 
 echo("AQUI VOY");

 $consulta = "SELECT * FROM post";

 $resultado = mysqli_query( $conexion, $consulta ) ;
 //or die ( "Algo ha ido mal en la consulta a la base de datos");


 echo "<table borde='2'>";
 echo "<tr>";
 echo "<th>Titulo</th>";
 echo "<th>Contenido</th>";
 echo "</tr>";



 while ($columna = mysqli_fetch_array( $resultado ))
 {
  echo "<tr>";
  echo "<td>" . $columna['title'] . "</td><td>" . $columna['content'] . "</td>";
  echo "</tr>";
 }


 echo "</table>";

//  or die('No se pudo conectar: '.mysql_error());
echo 'Connected successfully';
// mysql_select_db('manzover_xiontech') or die('No se pudo seleccionar la base de datos');

// // Realizar una consulta MySQL
// $query = 'SELECT * FROM post';
// $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// // Imprimir los resultados en HTML
// echo "<table>\n";
// while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
//     echo "\t<tr>\n";
//     foreach ($line as $col_value) {
//         echo "\t\t<td>$col_value</td>\n";
//     }
//     echo "\t</tr>\n";
// }
// echo "</table>\n";

// // Liberar resultados
// mysql_free_result($result);

// // Cerrar la conexión
// mysql_close($link);
?>
