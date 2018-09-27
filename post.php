<?php
include "config.php";
include "utils.php";


$dbConn =  connect($db);

/*
<<<<<<< HEAD
  listar todos los posts o solo uno
=======
  listar todos los post o solo uno
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5
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
<<<<<<< HEAD
      }
      elseif(isset($_GET['category'])){
        $sql = $dbConn->prepare("SELECT * FROM post where category=:category");
        $sql->bindValue(':category', $_GET['category']);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 OK");
        echo json_encode( $sql->fetchAll()  );
        exit();


      }
=======
	  }
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5
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

<<<<<<< HEAD
// Crear un nuevo post / o actualizarlo si ya tiene ID
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = $_POST;
    
    echo("ESTA ES MI VARIABLE ACTUALIZA=:actualiza");
    echo("ESTA ES MI VARIABLE 1ACTUALIZA=".$input['actualiza']." ;id=".$input['id']);
    
       
   if(isset($input['id'])){
        

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
=======
// Crear un nuevo post
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = $_POST;
    $sql = "INSERT INTO post
          (title, status, content, user_id)
          VALUES
          (:title, :status, :content, :user_id)";
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5
    $statement->execute();
    $postId = $dbConn->lastInsertId();
    if($postId)
    {
      $input['id'] = $postId;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      exit();
<<<<<<< HEAD
     }
    }
=======
	 }
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5
}

//Borrar
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
<<<<<<< HEAD
 $id = $_GET['id'];
=======
	$id = $_GET['id'];
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5
  $statement = $dbConn->prepare("DELETE FROM post where id=:id");
  $statement->bindValue(':id', $id);
  $statement->execute();
	header("HTTP/1.1 200 OK");
	exit();
}

//Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
<<<<<<< HEAD
    $input = $_GET['id'];
    

    $postId = $input['id'];
echo($input['id']." -- ".$input['title']." -- ".$input['content']);
echo($output['id']." -- ".$output['title']." -- ".$output['content']);
    $fields = getParams($input);
   // echo("iMPRESION PARAMETROS=".:title." - ". :status." - ".:content);
  $sql = 
           "
=======
    $input = $_GET;
    $postId = $input['id'];
    $fields = getParams($input);

    $sql = "
>>>>>>> 6bf28ed152b9e3c7204e82aa9fbf3cb874287fe5
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