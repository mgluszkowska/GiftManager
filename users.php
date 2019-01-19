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
            <th></th>
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
        
        
        
        <td><form id="" action="" method="post">";
   <input type="submit" id="submit" name="submit" value="Zobacz listę życzeń" />
</form></td>
    </tr>
<?php
} 
?> </table>
    </body>

</html>
    
if(isset($_POST['submit'])) {
    header("Location: gifts.php");
    }