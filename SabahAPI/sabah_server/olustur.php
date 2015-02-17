<?php
$mail = $_GET['mail'];
$keyx = base64_encode($mail);
$keyy = base64_encode($keyx);
$key = $keyx."_-_-_".$keyy;
$mailkey = wordwrap($key,70);
$headers = "From: sabahapi@github.com" . "\r\n" ."CC: sabahapi@github.com";
if(file_exists("keyler/".$key.".php")){
	echo "Bu Mail Adresi Kullanılmaktadır!";
}
else{
mail($mail,"Sabah API Keyin",$mailkey,$headers);
echo "Keyiniz MAİL Adresinize Başarı İle Gönderildi.";
touch("keyler/".$key.".php");
}
?>