<?php
session_start();




echo '
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>XionTech.co</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Griffy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Griffy|Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">    
	<link rel="shorcut icon" href="favicon.ico" type="image/x-icon">

	<script>
    function mostrarInputs(dato){
        alert("este es la variable="+dato);    }
</script>
</head>
<body>
	<header>
		
		<div id="logo">
			<img class="float-left" src="img/logoXT.gif"  alt="Card image cap">	
			<h1>Oscar Martinez</h1>
			<h2>Web - Mobile- Data Base Developer</h2>
		</div>

		<nav>
			<ul>
				<li><a href="index.html" class="selected"> Inicio</a></li>
				<li><a href="blog.html"> Blog</a></li>
				<li><a href="contacto.html"> Contacto </a></li>
			</ul>
		</nav>
		
    </header>
    
    
    
    ';

    $cliente = curl_init();
   curl_setopt($cliente, CURLOPT_URL, "http://www.xiontech.co/category.php");
   curl_setopt($cliente, CURLOPT_CUSTOMREQUEST, "GET"); 
   curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
   $data=curl_exec($cliente);
   curl_close($cliente);
   $miarray = json_decode($data); 
   



  echo '  <form >
    <div class="form-group">
    <label  for="selCategory">SELECCIONA LA CATEGORIA BUSCAR</label>
    <select class="form-control form-control-lg" id="selCategory" onchange="alert(this.value);"  >
    ';
    foreach($miarray as $obj){
        $categoria = $obj -> category;
        
       echo' <option >'.$categoria."</option>";
    }

    //$_POST['selCategory']= echo'<script>document.getElementById("selCategory").value</script>';    
   
   

    echo'
  
    </div>
    </select>

    <input id="prueba" class="form-control" type="text" placeholder="Default input" >

    <button type="button" class="btn btn-primary" >Cargar</button>
    
    </form>


    <h3>este es el contenido del select de categoria';
    echo '
     <h3>xxxxx</h3> ';

  // $_SESSION['categoria']  =cat;


$cliente = curl_init();
curl_setopt($cliente, CURLOPT_URL, "http://www.xiontech.co/post.php?category=WEB");
curl_setopt($cliente, CURLOPT_CUSTOMREQUEST, "GET"); 
curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
$data=curl_exec($cliente);
curl_close($cliente);
$miarray = json_decode($data); 
 


    
   



foreach($miarray as $obj){
    $categoria = $obj -> category;
    $titulo = $obj -> title;
    $contenido = $obj -> content;
    $id = $obj -> id;
    $estado = $obj -> status;
    $idusuario = $obj -> user_id;
    $fecha_post = $obj -> fecha_post;
    $fecha_actualiza = $obj -> fecha_upd;
    
    
  
   


echo'
    <div id="wrapper">
    <div style="text-align:center;">
    <h3>'.$titulo.'</h3>
    </div>






    <small id="emailHelp" class="text-muted">'.$fecha_post.'</small>    
<form>
  
<div class="form-group">
    





  
  <div class="form-group">
    <label for="contenidoPost">Contenido</label>
    <textarea  style="heigth:auto;" class="form-control" id="contenidoPost" placeholder=""> '.$contenido.'</textarea>
  </div>
  
  
</form>';}

echo'





</div>

<footer>
		Derechos reservados 
	</footer>
	<script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script   src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js.map"></script>

</body>
</html>
';




?>