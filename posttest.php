<?php
//$r = new HttpRequest('http://irizar.ehost.pl/martik97/newgift.php', HttpRequest::METH_POST);
//$r->setOptions(array('cookies' => array('lang' => 'de')));
//$r->addPostFields(array('name' => 'mike', 'price' => '8'));
//$r->addPostFile('image', 'profile.jpg', 'image/jpeg');
//try {
//    echo $r->send()->getBody();
//} catch (HttpException $ex) {
//    echo $ex;
//}


$url = "http://www.google.com/";        
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_HEADER, TRUE); 
curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body 
$head = curl_exec($ch); 
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
curl_close($ch); 
var_dump($head);
?>