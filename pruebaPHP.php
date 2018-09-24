<?php

echo("ingesando a la funcionalidad de conexión de BD<br>");

// Conectando, seleccionando la base de datos


// $usuario = 'manzover_root';

// $contrasena = 'Cangrejo76';  // en mi caso tengo contraseña pero en casa caso introducidla aquí.

// $servidor = '199.79.62.243:3306';

$basededatos = 'manzover_xiontech'; 



$conexion = mysqli_connect('199.79.62.243', 'manzover_root','Cangrejo76')or die ('No se ha podido conectar al servidor de Base de datos').mysqli_error();

/*

$conexion = mysqli_connect( $servidor, $usuario, $contrasena) 

or die ('No se ha podido conectar al servidor de Base de datos').mysqli_error();*/



echo('AQUI VOY 000 <br>');



$db = mysqli_select_db( $conexion, $basededatos)or die ('No se ha podido generar la consulta').mysqli_error();;

 

 echo('AQUI VOY');



 $consulta = 'SELECT * FROM post';



 $resultado = mysqli_query( $conexion, $consulta )or die ('No se ha podido cargar la consulta de Base de datos').mysqli_error(); ;

 //or die ( 'Algo ha ido mal en la consulta a la base de datos');

 echo '<table borde="2">';

 echo '<tr>';

 echo '<th>Titulo</th>';

 echo '<th>Contenido</th>';
 echo '<th>USUARIO</th>';
 echo '<th>FECHA CREACION</th>';
 echo '<th>FECHA POST</th>';

 echo '</tr>';


 while ($columna = mysqli_fetch_array( $resultado ))

 {

  echo '<tr>';

  echo '<td>' . $columna['title'] . '</td><td>' . $columna['content'].'</td><td>'.$columna['user_id'].'</td><td>'.$columna['fecha_post'].'</td><td>'.$columna['fecha_upd'].'</td>';

  echo '</tr>';

 }


 echo '</table>';



// // Liberar resultados

// mysql_free_result($result);



// // Cerrar la conexión

// mysql_close($link);

?>

