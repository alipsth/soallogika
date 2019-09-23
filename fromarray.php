<html>
<head>
	<title>Form Array</title>
</head>
<body>
	<form action="" method="GET" >
		<fieldset>
		Masukan Data  <input type="number" min="1" name="data">
		<input type="submit" name="Simpan" value="Simpan"><br><br>
		<hr>
	</form>
<form action="prosesaray.php" method="POST">
   <?php 
	if (isset($_GET['Simpan'])) { 
		$data = $_GET['data'];
	for ($i=0; $i < $data ; $i++) { ?> 
		<label for=>Nama</label>
		<input type="text" name="nama[]" required><br>
		<label for=>Kelas</label>
		<input type="text" name="kelas[]" required><br>
		<br>
		<br>
	 <?php } ?>
		<input type="submit" name="sbm" value="Simpan"><br>
		<input type="reset" value="Reset"> 
	</form>
<?php } ?>
</fieldset>
 </body>
 </html>