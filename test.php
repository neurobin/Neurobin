<?php
include "./Parsedown.php";
$parse=new Parsedown();
$filename="./README.md";
echo  $parse->text(file_get_contents($filename));

?>	
