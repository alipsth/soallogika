<html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="" method="POST" name="input">
	Masukan Bilangan : <input type="number" name="blng">
	<input type="submit" name="Simpan" value="Simpan">
</form>
 </body>
 </html>

 <?php 
if (isset($_POST['Simpan'])) {
	$bilangan = $_POST['blng'];
	echo "<br>";
for ($i=1; $i <= $bilangan ; $i++) {
for ($b=1; $b <= $i ; $b++) { 
	echo "*";
 }
 	echo "<br>";	 
	}
	echo "Total Bintang : $bilangan";
}
 ?>