<html>
<head>
	<title>Pengelolahan Form</title>
</head>
<body>
	<form action=" " method="POST" 	name="input">
		Nama anda : <input type="text" name="nama"><br>
		<br>
		<input type="Submit" name="Input" value="Input">
	</form>
</body>
</html>

<?php 
if (isset($_POST['Input'])) {
	$nama = $_POST['nama'];
	echo "Nama anda : $nama";
}
 ?>