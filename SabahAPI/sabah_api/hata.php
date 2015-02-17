<?php 
require 'css.php';
require 'hata_kodlari.php';
function hata($kod){
	$akod = $kod;
	$baslik = hata_baslik($akod);
	$icerik = hata_icerik($akod);
	checkIt($baslik,$icerik);
}
?>