<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<legend></legend>
		<pre>
			
<?php 
	if (isset($_POST['Simpan'])) {
		$jml = $_POST['jml'];
		for ($i=0; $i < $jml ; $i++) { ?>
	<form action = "linkujian1.php" mentod = "POST">
		Judul Buku  :<input type="text" name="judul" required><br>
		Kode Buku   :<input type="text" name="kode" required><br>
		Pengarang   :<input type="text" name="pengarang" required><br>
		Jenis Buku  :<select name="jenis">
			<option value="NOVEL">NOVEL</option>
			<option value="FIKSI">FIKSI</option>
			<option value="HORROR">HORROR</option>
			<option value="CERGAM">CERGAM</option>
			<option value="KOMIK">KOMIK</option>
			<br></select>
			
		Harga Buku  :<input type="number" name="harga" required><br>
		<hr>
<?php  
	}

?>
	<tr>
		<input type="submit" name="Simpan" value="Simpan"><input type="reset" value="Reset">
	</tr>
	<?php
	}
	?>
		</pre>
	</fieldset>

</body>
</html>