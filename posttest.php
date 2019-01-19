<?php
$r = new HttpRequest('http://irizar.ehost.pl/martik97/newgift.php', HttpRequest::METH_POST);
//$r->setOptions(array('cookies' => array('lang' => 'de')));
$r->addPostFields(array('name' => 'mike', 'price' => '8'));
//$r->addPostFile('image', 'profile.jpg', 'image/jpeg');
try {
    echo $r->send()->getBody();
} catch (HttpException $ex) {
    echo $ex;
}
if ($_SERVER['REQUEST_METHOD']== "POST") {
 $mes =   $_POST["message"];
    echo $mes;
}
?>