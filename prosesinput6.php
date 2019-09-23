<?php 
	if (isset($_POST['Input'])) {  
	$nama = $_POST['nama'];  
	$mapel1 = $_POST['mapel1'];  
	$mapel2 = $_POST['mapel2'];
	$a =($mapel1 + $mapel2)/2;    

		echo "Nama : $nama <br>";
		echo "Mapel1 : $mapel1 <br>";
		echo "Mapel2 : $mapel2 <br>";
		echo "Rata-Rata : $a";

		if ($a > 75) {
			echo "<br>";
			echo "LULUS";
		}elseif ($a < 75) {
			echo "<br>";
			echo "TIDAK LULUS";
		}
	} 
?>
<html>
<head>
	<title>Hasil</title>
</head>
<body>
<form action="soalinputform2.php" method="POST" name="input">
	<input type="submit" name="input" value="KEMBALI">
</form>
</body>
</html>