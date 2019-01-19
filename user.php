<?php

if ($_SERVER['REQUEST_METHOD']== "POST") {
    
    $id =   $_POST["id"];
    
    $curl = curl_init();

    $data = array('id'=>$id);

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://irizar.ehost.pl/martik97/userjson.php",
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

?>

<html>
    <head>
        <title>Lista prezentów</title>
        <meta charset="utf-8">
        <META http-equiv=content-type content="text/html; charset=iso-8859-2">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
        <h1>Lista prezentów</h1><br>
        <table>
        <tr>
            <th>Id</th>
            <th>Nazwa</th> 
            <th>Cena</th>
            <th>Link</th>
        </tr>
       <?php  

$json = file_get_contents($response);
$data = json_decode($json);
foreach($data as $item){
    ?>
    <tr>        
        <td> <?php echo $item->id."" ?></td>
        <td> <?php echo $item->name."" ?></td>
        <td> <?php echo $item->price."" ?></td>
        <td> <?php echo $item->link."" ?></td>
    </tr>
<?php
} 
?> </table>
    </body>

</html>

