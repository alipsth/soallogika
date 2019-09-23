<?php 
if (isset($_POST['Simpan'])) {
		$Nama = $_POST['nama'];
		$Nip = $_POST['nip'];
		$Alamat =$_POST['almt'];
		$Jk = $_POST['jk'];
		$Jk = $_POST['jk'];
		$Status=$_POST['status'];
		$Jabatan = $_POST['jabatan'];
		$Golongan = $_POST['golongan'];
		echo "<pre>";
		echo "Nama  	  :<b> $Nama</b><br>";
		echo "Nip       :<b> $Nip</b><br>";
		echo "Alamat    :<b> $Alamat</b><br>";
		echo "Jk   	  :<b>$Jk</b><br>";
		echo "Status    :<b> $Status</b><br>";
		echo "Jabatan   :<b> $Jabatan</b><br>";
			if (isset($_POST['p1'])) {
				echo "Potongan  :";
				echo " " . $_POST['p1'];
				echo "<br>";
							}
			if (isset($_POST['p2'])) {
				echo "            " . $_POST['p2'];
				echo "<br>";
			}
			if (isset($_POST['p3'])) {
				echo "            " . $_POST['p3'];
				echo "<br>";
			}
		echo "Golongan  :<b> $Golongan</b><br>";
		echo"<hr>";
		echo "</pre>";

		echo "<center> KETERANGAN </center>";
		echo "<pre>";
		if ($Golongan == "A1") {
			$Gol =250000;
		}elseif ($Golongan == "A2") {
			$Gol =200000;
		}elseif ($Golongan) {
			$Gol =150000;
		}
		if ($Status == "menikah"){
				$stat =100000;
			}elseif ($Status == "belum menikah") {
				$stat =50000;		
			}

		
		if ($Jabatan == "HRD"){
			$jab = 5000000;
			}elseif ($Jabatan == "MANAGER") {
				$jab =4500000;
			}elseif ($Jabatan == "STAFF") {
				$jab =3000000;
			}elseif ($Jabatan == "KARYAWAN") {
				$jab =2500000;
			}
			if ("p1") {
				$pot =250000;
				$po =$pot;
			}
			if ("p2") {
				$pot2 =150000;
				$po =$pot + $pot2;
			}
			if ("p3") {
				$pot3 =150000;
				$po =$pot + $pot2 + $pot3;
			}
			echo "Tunjangan :"."$stat<br>";
			echo "Gaji :"."$jab<br>";
			echo "Potongan :"."$po<br>";
			echo "<hr>";
			echo "</pre>";

			echo "<center> PENGGAJIAN </center>";
			echo "<pre>";
			if ($Golongan == "A1"){
			echo "Bonus   : ". "<b>Rp.250.000</b>";
				echo "<br>";
			}elseif ($Golongan == "A2") {
				echo "Bonus   : ". "<b>Rp.200.000</b>";
				echo "<br>";
			}elseif ($Golongan == "A3") {
				echo "Bonus    :". "<b>Rp.150.000</b>";
				echo "<br>";
			} 
			$potong = $Gol + $stat + $jab - $po;
			echo "Gaji Kotor :"."$potong<br>";
			$pajak=$potong * 2.5/100;
			echo "Pajak :"."$pajak <br>";
			$bersih=$potong-$pajak;
			echo "Gaji Bersih :"."$bersih<br>";
			echo "</pre>";
}
 ?>