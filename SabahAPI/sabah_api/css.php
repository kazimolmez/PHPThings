<?php 
$csss = array("w3css","boostrap","temelHTML");
$css = $csss['0'];
$linkler = array('<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">','  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>')
function w3Mesaj($baslik,$icerik){
	echo '<div class="w3-panel w3-red w3-display-container"><span onclick="this.parentElement.style.display='none'"class="w3-button w3-red w3-large w3-display-topright">&times;</span><h3>'.$baslik.'</h3><p>'.$icerik.'</p></div>';
}
function bstrapMesaj($baslik,$icerik){
	echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>'.$baslik.'</strong>'.$icerik.'</div>';
}
function temelMesaj($baslik,$icerik){
	echo '<fieldset><legend>'.$baslik.'</legend><p>Sabah - CLI Hata Bilgilendirmesi: '.$icerik.'</p></fieldset>';
}
function linkGetir($cssID){
	$css = $csss[$cssID];
}
function cssSec($link){
	echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
}
function checkIt($baslik,$icerik){
	global $cssID;
	if($csss[$cssID] = "w3css"){
	    return w3Mesaj($baslik,$icerik);		
	}
	elseif($csss[$cssID] = "boostrap"){
		return bstrapMesaj($baslik,$icerik);
	}
	elseif($csss[$cssID] = "temelHTML"){
		return temelMesaj($baslik,$icerik);
	}
}
?>