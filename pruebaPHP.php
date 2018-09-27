<?php

echo("ingesando a la funcionalidad de conexión de BD<br>");

// Conectando, seleccionando la base de datos


// $usuario = 'manzover_root';

// $contrasena = 'Cangrejo76';  // en mi caso tengo contraseña pero en casa caso introducidla aquí.

// $servidor = '199.79.62.243:3306';

<<<<<<< HEAD
$basededatos = 'manzover_xiontech'; 
=======
// $basededatos = 'manzover_xiontech'; 
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5



$conexion = mysqli_connect('199.79.62.243', 'manzover_root','Cangrejo76')or die ('No se ha podido conectar al servidor de Base de datos').mysqli_error();

/*

$conexion = mysqli_connect( $servidor, $usuario, $contrasena) 

or die ('No se ha podido conectar al servidor de Base de datos').mysqli_error();*/



echo('AQUI VOY 000 <br>');



<<<<<<< HEAD
$db = mysqli_select_db( $conexion, $basededatos)or die ('No se ha podido generar la consulta').mysqli_error();;

 


=======
$db = mysqli_select_db( $conexion, $basededatos);

 

 echo('AQUI VOY');
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5



 $consulta = 'SELECT * FROM post';



<<<<<<< HEAD
 $resultado = mysqli_query( $conexion, $consulta )or die ('No se ha podido cargar la consulta de Base de datos').mysqli_error(); ;

 //or die ( 'Algo ha ido mal en la consulta a la base de datos');

 echo '<table borde="2">';
=======
 $resultado = mysqli_query( $conexion, $consulta ) ;

 //or die ( 'Algo ha ido mal en la consulta a la base de datos');





 echo '<table borde='2'>';
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5

 echo '<tr>';

 echo '<th>Titulo</th>';

 echo '<th>Contenido</th>';
<<<<<<< HEAD
 echo '<th>USUARIO</th>';
 echo '<th>FECHA CREACION</th>';
 echo '<th>FECHA POST</th>';
=======
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5

 echo '</tr>';


<<<<<<< HEAD
=======





>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5
 while ($columna = mysqli_fetch_array( $resultado ))

 {

  echo '<tr>';

<<<<<<< HEAD
  echo '<td>' . $columna['title'] . '</td><td>' . $columna['content'].'</td><td>'.$columna['user_id'].'</td><td>'.$columna['fecha_post'].'</td><td>'.$columna['fecha_upd'].'</td>';
=======
  echo '<td>' . $columna['title'] . '</td><td>' . $columna['content'] . '</td>';
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5

  echo '</tr>';

 }


<<<<<<< HEAD
=======



>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5
 echo '</table>';



<<<<<<< HEAD
 
   $cliente = curl_init();
   curl_setopt($cliente, CURLOPT_URL, "http://www.xiontech.co/category.php");
   curl_setopt($cliente, CURLOPT_CUSTOMREQUEST, "GET"); 
   curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
   $data=curl_exec($cliente);
   curl_close($cliente);
   $miarray = json_decode($data); 
    
    echo("<br>");
    echo("<h1>estas son las categorias</h1>");
$contador=0; 

foreach($miarray as $obj){
    $categoria = $obj -> category;
    echo "esta es la categoria:".$categoria."<br> ";
    echo "" ;
}
    

 




=======
//  or die('No se pudo conectar: '.mysql_error());

echo 'Connected successfully';

// mysql_select_db('manzover_xiontech') or die('No se pudo seleccionar la base de datos');



// // Realizar una consulta MySQL

// $query = 'SELECT * FROM post';

// $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());



// // Imprimir los resultados en HTML

// echo '<table>\n';

// while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

//     echo '\t<tr>\n';

//     foreach ($line as $col_value) {

//         echo '\t\t<td>$col_value</td>\n';

//     }

//     echo '\t</tr>\n';

// }

// echo '</table>\n';
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5



// // Liberar resultados

// mysql_free_result($result);



// // Cerrar la conexión

// mysql_close($link);

?>

