<?php

if ($_SERVER['REQUEST_METHOD']== "POST") {
    
     $name =   $_POST["name"];
    $price = $_POST["price"];
    if (isset($_POST['link'])) {
        $link = $_POST["link"];
    }
    else {
        $link = 'NULL';
    }
    
    $curl = curl_init();

    $data = array('name'=>$name,
                  'price'=>$price,
                 'link'=>$link);

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://irizar.ehost.pl/martik97/newgift.php",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        "Postman-Token: 1368197a-2612-4350-9ab5-05364ecef319",
        "cache-control: no-cache",
        "content-type: multipart/form-data"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
}

