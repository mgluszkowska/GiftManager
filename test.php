<html>
    <head>
        <title>Wszystkie prezenty</title>
        <meta charset="utf-8">
        <META http-equiv=content-type content="text/html; charset=iso-8859-2">
    </head>
    <body>
        <h1>OK</h1><br>
        <p>
       <?php  
    
    //echo "Chill";

$json = file_get_contents('http://irizar.ehost.pl/martik97/items.json');
$json = json_decode($json);
foreach($json as $item){
    $name = $item->name."";
    $price = $item->price."";
    $link = $item->link."";
    //echo "Item: ".$name." Price: ".price." Link: ".$link 
    //echo <br>
}

?> </p>
    </body>

</html>