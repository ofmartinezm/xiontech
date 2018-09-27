<?php
include "config.php";
include "utils.php";
$dbConn =  connect($db);

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{   
     /*if (isset($_GET['id']))
    {
      //Mostrar una categoria
      $sql = $dbConn->prepare("SELECT * FROM post where id=:id");
      $sql->bindValue(':id', $_GET['id']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	  }
    else {*/
      //Mostrar todas las categorias
      $sql = $dbConn->prepare("SELECT DISTINCT (category) FROM post");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll()  );
      exit();
	//}
}

?>