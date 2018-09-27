<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <title>XionTech.co</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Griffy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Griffy|Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">    
	<link rel="shorcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<header>
		<div id="logo">
			<img class="float-left" src="img/logoXT.gif" alt="Card image cap">
			<h1>Oscar Martinez</h1>
			<h2>Web - Mobile- Data Base Developer</h2>
		</div>

		<nav>
			<ul>
				<li>
					<a href="index.html"> Inicio</a>
				</li>
				<li>
					<a href="blog.html"> Blog</a>
				</li>
				<li>
					<a href="contacto.html"> Contacto </a>
				</li>
			</ul>
		</nav>

	</header>

    
<?php 
$cliente = curl_init();
curl_setopt($cliente, CURLOPT_URL, "http://www.xiontech.co/category.php");
curl_setopt($cliente, CURLOPT_CUSTOMREQUEST, "GET"); 
curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
$data=curl_exec($cliente);
curl_close($cliente);
$miarray = json_decode($data); 
?>
<div class="content_post" style="margin:0; padding-bottom:20px; margin-left: 2%; margin-right:2%;">
         

        <h3 style="margin:0; padding: 0; padding-bottom:5px;">POR FAVOR SELECCIONA LA CATEGORIA</h3>    
    
        
    
     <select class="form-control form-control-lg" id="categoria" id="" onclick="Cargar(this.value);" >
        <?php 
        
            foreach($miarray as $obj){
                                $categoria = $obj -> category;
                                echo' <option >'.$categoria."</option>";
                            }

        ?>
        </select>
        

                                      
    </div>

<div class="content_post" id="resultado"></div>

</body>
<script>
function Cargar(dato) {
//var cat=document.getElementById("categoria").value    ;
//alert(cat);
var xmlhttp = new XMLHttpRequest();
var url = "post.php?category="+dato;
var out = '<div id="wrapper2">';
xmlhttp.onreadystatechange=function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 var array = JSON.parse(xmlhttp.responseText);
 var i;
 
 for(i = 0; i < array.length; i++) {
 
 out+=" <h3 style='text-transform: uppercase; padding:0; margin:0 ; padding-top:20px;'>"+
 array[i].title +
 '</h3><small id="emailHelp" class="form-text text-muted">'+array[i].fecha_post+"</small> <div style='text-align:justify margin: 0; padding-bottom:20px;'>"+
 array[i].content+'<hr/>';
 
}
 out += "</div> ";
 document.getElementById("resultado").innerHTML = out;
 }else{
    document.getElementById("resultado").innerHTML = "<h3>!!!No se encontraron resultados!!!</h3>";
 }
}
xmlhttp.open("GET", url, true);
xmlhttp.send(); 
}
</script>

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
