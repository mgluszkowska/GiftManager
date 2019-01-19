<script type="text/javascript">
  function function() {
      
      var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
    //window.location = "gifts.php";
  }
</script>



<html>
    <head>
        <title>Użytkownicy</title>
        <meta charset="utf-8">
        <META http-equiv=content-type content="text/html; charset=iso-8859-2">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
        <h1>Lista wszystkich użytkowników</h1><br>
        <table>
        <tr>
            <th>Id</th>
            <th>Imię</th> 
            <th>Nazwisko</th>
            <th></th>
            <th></th>
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
        <td> <button type="button"><a href=<?php echo "https://giftmanagerppr.herokuapp.com/user".$item->id.".json"?>>Click me</a></button></td>
        <td><div class="popup" onclick="function()">New
  <span class="popuptext" id="myPopup">Popup text...</span>
</div></td>
        
        <td><input type="button" value="Zobacz listę życzeń" onclick="redir();" /></td>
    </tr>
<?php
} 
?> </table>
    </body>

</html>