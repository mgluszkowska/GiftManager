<html>
    <head>
        <title>Użytkownicy</title>
        <meta charset="utf-8">
        <META http-equiv=content-type content="text/html; charset=iso-8859-2">
    </head>
    <body>
        <h1>Lista wszystkich użytkowników</h1><br>
        <table>
        <tr>
            <th>Id</th>
            <th>Imię</th> 
            <th>Nazwisko</th>
        </tr>
       <?php  

$json = file_get_contents('http://irizar.ehost.pl/martik97/users.json');
$data = json_decode($json);
foreach($data as $item){
    ?>
    <tr>        
        <td> <?php echo $item->id."" ?></td>
        <td> <?php echo $item->name."" ?></td>
        <td> <?php echo $item->surname."" ?></td>
        <button type="button">Zobacz listę życzeń</button>
    </tr>
<?php
} 
?> </table>
    </body>

</html>