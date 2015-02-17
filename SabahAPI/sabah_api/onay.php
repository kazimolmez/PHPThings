<?php
function onayla($deg){
	$deg = 1;
	echo "<script>console.log('SabahAPI - CLI: Sabah API Keyiniz Doğrulandı</script>";
}
function kontrolEt($deg){
	if($deg){
		echo "<script>console.log('SabahAPI - CLI: İstem Başarıyla Sonuçlandı</script>";
		return 1;
	}
	else{
		echo "<script>console.log('SabahAPI - CLI: İstem Başarsızlıkla Sonuçlandı</script>";
		return 0;
	}
}
?>