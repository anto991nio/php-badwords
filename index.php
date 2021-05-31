<?php 

$paragrafo ="ciao sono antonio cardone e ho 29 anni";
$badWord = strtolower($_GET["badword"]);
$newWord = str_replace($badWord, "***",$paragrafo);

echo $paragrafo;


echo "<br>";

echo strlen($paragrafo);

echo "<br>";

echo $newWord;


?> 

