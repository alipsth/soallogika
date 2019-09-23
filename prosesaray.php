<?php 
if (isset($_POST['sbm'])) {
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$nomer =0;
	$nomer2=0;

	//var_dupm($nama);
	foreach ($nama as $data => $x) {
		echo "Nama :". $nama[$data] .
		"-Kelas : " . $kelas[$data] . "<hr>";
	}
}