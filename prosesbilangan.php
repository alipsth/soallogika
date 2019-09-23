<?php 
if (isset($_POST['sbm'])) {
	$x = $_POST['blng'];
	$y = $_POST['pangkat'];

	for ($a=0; $a < count($x) ; $a++) { 
		for ($z=0; $z < $y[$a]; $z++) { 
			echo $x[$a] ;
				echo "x";
			if ($z < $z[$a]) {
			}
		}
		$hasil = pow($x[$a],$y[$a]);
		echo " = " . $hasil . " =>";
		if ($hasil % 2 == 1) {
			echo "Bilangan Ganjil <hr>";
		}else{
			echo "Bilangan Genap<hr>";
		}
	}
}