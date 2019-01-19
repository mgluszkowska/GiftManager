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


$url = "http://irizar.ehost.pl/martik97/newgift.php";        
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
//curl_setopt($ch, CURLOPT_HEADER, TRUE); 
//curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body 
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_VERBOSE, 1);
//$head = curl_exec($ch); 
//$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
//curl_close($ch); 
//var_dump($head);
//var_dump($httpCode);
//$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
//$header = substr($head, 0, $header_size);
//$body = substr($head, $header_size);
//var_dump($header_size);
//var_dump($header);
//echo $body;


$headers = [];
//curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// this function is called by curl for each header received
curl_setopt($ch, CURLOPT_HEADERFUNCTION,
  function($curl, $header) use (&$headers)
  {
    $len = strlen($header);
    $header = explode(':', $header, 2);
    if (count($header) < 2) // ignore invalid headers
      return $len;

    $name = strtolower(trim($header[0]));
    if (!array_key_exists($name, $headers))
      $headers[$name] = [trim($header[1])];
    else
      $headers[$name][] = trim($header[1]);

    return $len;
  }
);

$data = curl_exec($ch);
print_r($headers);
?>