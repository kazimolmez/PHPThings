<?php
$kontrol = $_GET['key'];
$dizin = "keyler/".$kontrol.".php";
if(file_exists($dizin)){
	echo "1 - ".$kontrol;
}
else{
	echo "0";
}
?>