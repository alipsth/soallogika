<?php 
function tambah_string ($string) {
	$string = $string . ",Jakarta";
	return $string;
}
//
$string = "Universitas Budi Luhur";
echo "\$string = $string<br>";
echo tambah_string ($string). "<br>";
echo "\$string = $string<br>";
 ?>
