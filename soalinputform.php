<html>
<head>
	<title>Soal input form</title>
</head>
<body>
<form action="" method="POST" name="input">
	Nama  : <input type="text" name="nama"><br>
	Kelas : <input type="text" name="kelas"><br>
	Alamat: <input type="text" name="alamat"><br>
	Hobi  : <input type="text" name="hobi"><br>
	<br>
	<input type="Submit" name="Input" value="Input">
</form>
</body>
</html>

<?php 
if (isset($_POST['Input'])) {
	$Nama = $_POST['nama'];
	$Kelas = $_POST['kelas'];
	$Alamat = $_POST['alamat'];
	$Hobi = $_POST['hobi'];
	echo "Nama : $Nama <br>";
	echo "Kelas : $Kelas <br>";
	echo "Alamat : $Alamat <br>";
	echo "Hobi : $Hobi <br>";
}
 ?>
