<?php 

$paragrafo ="Ciao Ciao Ciao Ciao Ciao Ciao Ciao";
$badWord = $_GET["badword"];
$newWord = str_replace($badWord, "***",$badWord);

echo strlen($paragrafo);

echo "<br>";

echo $paragrafo . " " . $newWord;

?>