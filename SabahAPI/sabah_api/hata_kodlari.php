<?php
$basliklar = array("CLIKey","CLIVer","CLIAcs","FILEBr","UnCtgry");
$hatalar = array("Geçersiz Sabah API Key","Geçersiz Sabah API Versiyonu","Geçersiz Sabah API Eriþimi","Geçersiz / Eksik Sabah API Dosyalarý","Geçersiz Katagori ID");
function hata_baslik($kod){
	global $basliklar;
	return $basliklar($kod);
}
function hata_icerik($kod){
	global $hatalar;
	return $hatalar($kod);
} 
?>