<?php 
$arrayNilai = array("Ani" => 80, "Otim" => 90, "Sri" => 75,
"Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrayNilai);
echo "</pre>";

sort($arrayNilai);
reset($arrayNilai);
echo "</b>Array setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrayNilai);
echo "</pre>";

rsort($arrayNilai);
reset($arrayNilai);
echo "<b>Array setelah pengurutan dengan rsort()</b>";
echo "<pre>";
print_r($arrayNilai);
echo "</pre>";
 ?>