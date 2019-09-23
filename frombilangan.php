<html>
<head>
	<title>Form Array</title>
</head>
<body>
	<form action="" method="GET" >
		<fieldset>
			<legend>Bilangan Berpangkat</legend>
		Masukan Jumlah  <input type="number" min="1" name="data">
		<br>
		<input type="submit" name="Simpan" value="Simpan"><br><br>
		<hr>
	
	</form>
<form action="prosesbilangan.php" method="POST">
   <?php 
	if (isset($_GET['Simpan'])) { 
		$data = $_GET['data'];
	for ($i=0; $i < $data ; $i++) { ?>
	<table>
	<tr> 
		<td><label for=>Masukan Bilangan :</label></td>
		<td><input type="text" name="blng[]" required></td>
		<td><label for=>Masukan Pangkat Bilangan :</label></td>
		<td><input type="text" name="pangkat[]" required></td>
	</tr></table>
	 <?php } ?>
		<input type="submit" name="sbm" value="Simpan">
		<input type="reset" value="Reset"> 
	</form>
<?php } ?>
</fieldset>
 </body>
 </html>