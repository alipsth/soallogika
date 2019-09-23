<?php 
/*******************************************
Nama file : session01.php Halaman ini merupakan 
halaman contoh penciptaan session. 
Perintah session_start() harus ditaruh di perintah pertama
tanpa spasi di depannya. Perintah session_start() 
harus ada pada setiap halaman yang berhubungan dengan session *****************************************************/
session_start();
if (isset($_POST['Login'])) {
 	$User = $_POST['User'];
 	$Pass = $_POST['Pass'];
 	//PERIKSA LOGIN
 	if ($User == "Alipsth" && $Pass = "Karsochrris2") {
 		//MENCIPTAKAN SESION
 		$_SESSION['Login'] = $User;
 		//MENUJU KE HALAMAN PEMERIKSAAN SESION
 		echo "<h1> Anda Berhasil Login</h1>";
 		echo "<h2> Klik <a href ='session2.php'>Di sini(session2.php)</a>";
 	}
 } else {
 ?>
 <html>
 <head>
 	<title>Login Here....</title>
 </head>
 <body>
 	<form action="" method="POST">
 		<pre>
 		<h2 align="center">Login Here...</h2>
 		Username   : <input type="text" name="User"><br>
 		Password   : <input type="Password" name="Pass"><br>
 		<input type="submit" name="Login" value="Login"><br>
 		
 		</pre>
 	</form>
 </body>
 </html> 
 <?php } ?>