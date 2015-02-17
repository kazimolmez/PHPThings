<?php
require 'url.php';
require 'hata.php';
require 'onayla.php';
$sabahapi = "../sabah_server/";
$durum = 0;
$secilikatagori = 0;
function baslat($key){
	global $sabahapi;
	$url = $sabahapi."kontrol.php?key=".$key;
	$sonuc = get_web_page($url);
	$icerik = $sonuc['content'];
	if($icerik = "1 - $key"){
		onayla($durum);
	}
	else{
	    hata("1");
	}
}
function katagoriSec($katagoriID){
	if(kontrolet($durum)){
		$katagori = katagoraay($katagoriID);
		global $secilikatagori;
		$secilikatagori = $katagori;
	}
	else{
		hata("1")
	}
		
} 
function katagoridenGetir(){
	global $secilikatagori;
	
}
}
?>