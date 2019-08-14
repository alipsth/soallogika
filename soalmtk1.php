<?php 
$hrg_jambu=15000;
$dus=6;
$hrg_dus=2000;
$kg=5;


$kg_dus=$dus * $kg;
$jml_dus=$hrg_dus * $dus;
$jml_jambu=$hrg_jambu*$kg_dus;
$jml_seluruh=$jml_jambu + $jml_dus;


echo "jumlah seluruh jambu :".$dus * $kg;
echo "<br>Harga jambu dikali (X) dengan jumlah jambu  :".$hrg_jambu * $kg_dus;
echo "<br>jumlah dus dikali 2000 :Rp.".$jml_dus;
echo "<br>jumlah seluruh jambu : Rp.".$jml_seluruh;
 ?>