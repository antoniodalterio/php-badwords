<?php 
 
$text= strtolower($_GET['name']);

$bad_word= strtolower($_GET['word']);

echo $text;

echo strlen($text);


$text_censored= str_replace($bad_word, '***', $text);

echo $text_censored.strlen($text_censored);

?>
