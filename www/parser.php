<?php 

$template = '/< *img[^>]*src *= *["\']?([^"\']*)/i';
$matches = array();
$text = file_get_contents("http://24.ua");
preg_match_all($template, $text, $matches);
var_dump($matches);


?>