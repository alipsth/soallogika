<?php 
//total cetak gol >= 10 'Mendali Emas' &=20"Mendapatkan bonus 100jt"
//total cetak gol >= 7 'Mendali Perak' &=9"Mendapatkan bonus 80jt"
//total cetak gol >= 4 'Mendali Perunggu' &=5"Mendapatkan bonus 50jt"
//total cetak gol < 4 'Mendali Emas Ngambang' &=20"Tidak mendapatkan bonus"
$gol =20;
if ($gol >= 10) {
	echo "Mendapatkan Mendali Emas,dengan total cetak gol : " . $gol;
}elseif ($gol >= 7) {
	echo "Mendapatkan Mendali Perak,dengan total cetak gol : " . $gol;
}elseif ($gol >= 4) {
	echo "Mendapatkan Mendali Perunggu,dengan total cetak gol : " . $gol;
}else{
	echo "Mendapatkan Mendali Emas Ngambang,dengan total cetak gol : " . $gol;
}
switch ($gol >= 10) {
	case '20':
		echo " Mendapatkan bonus 100jt  ";
		break;
	
	default:
	switch ($gol >= 7) {
	case '9':
		echo " Mendapatkan bonus 80jt  ";
		break;
	
	default:
	switch ($gol >= 4) {
	case '5':
		echo " Mendapatkan bonus 50jt  ";
		break;
	
	default:
	switch ($gol < 4) {
	case '2':
		echo " Tidak mendapatkan bonus  ";
		break;
	
	default:
}
}
}
}

 ?>