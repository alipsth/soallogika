<?php 
	if (isset($_POST['Input'])) {
		$nama = $_POST['nama'];
		$nis = $_POST['nis'];
		$Alamat =$_POST['saran'];
		$jk = $_POST['jk'];
		$jk = $_POST['jk'];
		$agama = $_POST['Agama'];
		$asl = $_POST['asl'];
		$ortu = $_POST['org'];
		$izh = $_POST['ijazah'];
		$email = $_POST['Email'];
		echo "<pre>";
		echo "Nama  		:<b>$nama</b><br>";
		echo "Nis             :<b>$nis</b><br>";
		echo "Alamat          :<b>$Alamat</b><br>";
		echo "Jenis kelamin   :<b>$jk</b><br>";
		echo "Agama           :<b>$agama</b><br>";
		echo "Asal Sekolah    :<b>$asl</b><br>";
		echo "Nama Ortu  	:<b>$ortu</b><br>";
			if (isset($_POST['band01'])) {
				echo "Mata pelajaran  :";
				echo " " . $_POST['band01'] . "<br>";
			}
			if (isset($_POST['band02'])) {
				echo " 		  " . $_POST['band02'] . "<br>";
			}
			if (isset($_POST['band03'])) {
				echo " 		  " . $_POST['band03'] . "<br>";
			}
			if (isset($_POST['band04'])) {
				echo "     " . $_POST['band04'] . "<br>";
			}
			echo "Total Ijazah  	:<b>$izh</b><br>";
			echo "Email  		:<b>$email</b><br>";
			if ($izh > 23) {
				echo "  ". "<b>Selamat, Anda LULUS !</b>";
			}else{
				echo "  ". "<b>Maaf, Anda TIDAK LULUS !</b>";
			}
		}
		echo "</pre>"; 
 ?>