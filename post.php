<?php
include "config.php";
include "utils.php";


$dbConn =  connect($db);

/*
  listar todos los posts o solo uno
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['id']))
    {
      //Mostrar un post
      $sql = $dbConn->prepare("SELECT * FROM post where id=:id");
      $sql->bindValue(':id', $_GET['id']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	  }
    else {
      //Mostrar lista de post
      $sql = $dbConn->prepare("SELECT * FROM post");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll()  );
      exit();
	}
}

// Crear un nuevo post / o actualizarlo si ya tiene ID
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = $_POST;
    
    echo("ESTA ES MI VARIABLE ACTUALIZA=:actualiza");
    echo("ESTA ES MI VARIABLE 1ACTUALIZA=".$input['actualiza']." ;id=".$input['id']);
    

   
   if($input['id']!=""){
        

    $postId = $input['id'];
    
echo($input['id']." -- ".$input['title']." -- ".$input['content']);

    $fields = getParams($input);
   // echo("iMPRESION PARAMETROS=".:title." - ". :status." - ".:content);
  $sql = 
           "
          UPDATE post
          SET $fields
          WHERE id='$postId'
           ";

    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);

    $statement->execute();
    header("HTTP/1.1 200 OK");
    exit();   

   } else {

     $sql = "INSERT INTO post
           (title, status, content, user_id)
           VALUES
           (:title, :status, :content, :user_id)";
  
   
   $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();
    if($postId)
    {
      $input['id'] = $postId;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      exit();
     }
    }
}

//Borrar
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
 $id = $_GET['id'];
  $statement = $dbConn->prepare("DELETE FROM post where id=:id");
  $statement->bindValue(':id', $id);
  $statement->execute();
	header("HTTP/1.1 200 OK");
	exit();
}

//Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
    $input = $_GET['id'];
    

    $postId = $input['id'];
echo($input['id']." -- ".$input['title']." -- ".$input['content']);
echo($output['id']." -- ".$output['title']." -- ".$output['content']);
    $fields = getParams($input);
   // echo("iMPRESION PARAMETROS=".:title." - ". :status." - ".:content);
  $sql = 
           "
          UPDATE post
          SET $fields
          WHERE id='$postId'
           ";

    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);

    $statement->execute();
    header("HTTP/1.1 200 OK");
    exit();
}


//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>