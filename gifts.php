<script type="text/javascript">
  function redir() {
    window.location = "newgift.html";
  }
</script>

<html>
    <head>
        <title>Wszystkie prezenty</title>
        <meta charset="utf-8">
        <META http-equiv=content-type content="text/html; charset=iso-8859-2">
    </head>
    <body>
        <h1>Lista wszystkich prezentów</h1><br>
        <input type="button" value="Stwórz nowy" onclick="redir();" />
        <table>
        <tr>
            <th>Id</th>
            <th>Nazwa</th> 
            <th>Cena</th>
            <th>Link</th>
        </tr>
       <?php  

$json = file_get_contents('http://irizar.ehost.pl/martik97/items.json');
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