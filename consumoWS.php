<?php
    // class CurlRequest
    // {
    //     public function sendPost()
    //     {
    //         //datos a enviar
    //         $data = array("a" => "a");
    //         //url contra la que atacamos
    //         $ch = curl_init("http://localhost/API/post");
    //         //a true, obtendremos una respuesta de la url, en otro caso, 
    //         //true si es correcto, false si no lo es
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         //establecemos el verbo http que queremos utilizar para la petición
    //         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    //         //enviamos el array data
    //         curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    //         //obtenemos la respuesta
    //         $response = curl_exec($ch);
    //         // Se cierra el recurso CURL y se liberan los recursos del sistema
    //         curl_close($ch);
    //         if(!$response) {
    //             return false;
    //         }else{
    //             return $response;
    //         }
    //     }

    //     public function sendPut()
    //     {
    //         //datos a enviar
    //         $data = array("a" => "a");
    //         //url contra la que atacamos
    //         $ch = curl_init("http://localhost/WebService/API_Rest/api.php");
    //         //a true, obtendremos una respuesta de la url, en otro caso, 
    //         //true si es correcto, false si no lo es
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         //establecemos el verbo http que queremos utilizar para la petición
    //         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    //         //enviamos el array data
    //         curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    //         //obtenemos la respuesta
    //         $response = curl_exec($ch);
    //         // Se cierra el recurso CURL y se liberan los recursos del sistema
    //         curl_close($ch);
    //         if(!$response) {
    //             return false;
    //         }else{
    //             var_dump($response);
    //         }
    //     }

    //     public function sendGet()
    //     {
    //         //datos a enviar
    //         $data = array("a" => "a");
    //         //url contra la que atacamos
    //         $ch = curl_init("http://localhost/WebService/API_Rest/api.php");
    //         //a true, obtendremos una respuesta de la url, en otro caso, 
    //         //true si es correcto, false si no lo es
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         //establecemos el verbo http que queremos utilizar para la petición
    //         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    //         //enviamos el array data
    //         curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    //         //obtenemos la respuesta
    //         $response = curl_exec($ch);
    //         // Se cierra el recurso CURL y se liberan los recursos del sistema
    //         curl_close($ch);
    //         if(!$response) {
    //             return false;
    //         }else{
    //             var_dump($response);
    //         }
    //     }

    //     public function sendDelete()
    //     {
    //         //datos a enviar
    //         $data = array("a" => "a");
    //         //url contra la que atacamos
    //         $ch = curl_init("http://localhost/WebService/API_Rest/api.php");
    //         //a true, obtendremos una respuesta de la url, en otro caso, 
    //         //true si es correcto, false si no lo es
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         //establecemos el verbo http que queremos utilizar para la petición
    //         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    //         //enviamos el array data
    //         curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    //         //obtenemos la respuesta
    //         $response = curl_exec($ch);
    //         // Se cierra el recurso CURL y se liberan los recursos del sistema
    //         curl_close($ch);
    //         if(!$response) {
    //             return false;
    //         }else{
    //             var_dump($response);
    //         }
    //     }
    // }

    // $new = new CurlRequest();

    // $resultado = $new ->sendPost();
    // var_dump($resultado);


             //datos a enviar
            //  $data = array("title" => "prueba envio desde php",
            //  "status" => "published",
            //  "content" => "Aliquam at iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue, est et sagittis dapibus, libero dui fringilla eros, 
            //  in mollis odio nisi id nisi.",
            // "user_id" =>"999" );
            //  //url contra la que atacamos
            //  $ch = curl_init("http://www.xiontech/post.php");
            //  //a true, obtendremos una respuesta de la url, en otro caso, 
            //  //true si es correcto, false si no lo es
            //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //  //establecemos el verbo http que queremos utilizar para la petición
            //  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            //  //enviamos el array data
            //  curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            //  //obtenemos la respuesta
            //  $response = curl_exec($ch);
            //  // Se cierra el recurso CURL y se liberan los recursos del sistema
            //  curl_close($ch);
            //  if(!$response) {
            //      return false;
            //      var_dump("error!!!");
            //  }else{
            //      var_dump($response);
            //  }
            //Iniciar sesion en una pagina web:
    
    //funciona ok insercion
    //          $data = array("title" => "prueba INSERCION desde php",
    //            "status" => "published",
    //            "content" => "Aliquam at iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue, est et sagittis dapibus, libero dui fringilla eros, 
    //            in mollis odio nisi id nisi.",
    //            "user_id" =>"222" );
    //   $cliente = curl_init();
	//   curl_setopt($cliente, CURLOPT_URL, "http://www.xiontech.co/post.php");
	//   curl_setopt($cliente, CURLOPT_POST, 1);
    //   curl_setopt($cliente, CURLOPT_POSTFIELDS, http_build_query($data));
    //   //"title=prueba envio II desde curl php&status=published&content=Aliquam at iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue, est et sagittis dapibus, libero dui fringilla eros,in mollis odio nisi id nisi.&user_id=888");
	//   //curl_setopt($cliente, CURLOPT_COOKIEJAR, "cookies.txt");
	//   curl_exec($cliente);
    //   curl_close($cliente);
 
    
  $date= date("Y-m-d H:i:s"); 
    echo($date);

// //FUNCIONA OK CONSULTA X ID
//   $data = array('title' => 'prueba actualización desde php',
//       'status' => 'published',
//       'content' => 'esta es una actualización del post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue, est et sagittis dapibus, libero dui fringilla eros,in mollis odio nisi id nisi.' 
//     );
//   $cliente = curl_init();
//   curl_setopt($cliente, CURLOPT_URL, "http://www.xiontech.co/post.php?id=6");
//   curl_setopt($cliente, CURLOPT_CUSTOMREQUEST, "GET"); 
//   curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
//  $data=curl_exec($cliente);
// curl_close($cliente);
// print_r($data);  




//funciona actualización de post
$data = array("title" => "EUREKA!!! prueba actualiza con POST desde php",
            "status" => "draft",
            "content" => "II POST ACTUALIZA... Aliquam at iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue, est et sagittis dapibus, libero dui fringilla eros, 
            in mollis odio nisi id nisi.",
            "fecha_upd" =>$date,
            "id" => 8 );
   $cliente = curl_init();
   curl_setopt($cliente, CURLOPT_URL, "http://www.xiontech.co/post.php");
   curl_setopt($cliente, CURLOPT_POST, 1);
   curl_setopt($cliente, CURLOPT_CUSTOMREQUEST, "POST"); 
   curl_setopt($cliente, CURLOPT_POSTFIELDS, http_build_query($data));
   curl_exec($cliente);
   curl_close($cliente);

?>