<?php
$basliklar = array("CLIKey","CLIVer","CLIAcs","FILEBr","UnCtgry");
$hatalar = array("Ge�ersiz Sabah API Key","Ge�ersiz Sabah API Versiyonu","Ge�ersiz Sabah API Eri�imi","Ge�ersiz / Eksik Sabah API Dosyalar�","Ge�ersiz Katagori ID");
function hata_baslik($kod){
	global $basliklar;
	return $basliklar($kod);
}
function hata_icerik($kod){
	global $hatalar;
	return $hatalar($kod);
} 
?>