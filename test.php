<html>
    <head>
        <title>Wszystkie prezenty</title>
        <meta charset="utf-8">
        <META http-equiv=content-type content="text/html; charset=iso-8859-2">
    </head>
    <body>
        <h1>OK</h1><br>
        <h2>
       <?php  
    
    echo "Chill";

$json = file_get_contents('http://irizar.ehost.pl/martik97/items.json');
$obj = json_decode($json);
var_dump($obj);
?> </h2>
    </body>

</html>