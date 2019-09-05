<?php 
$array = array('saya',10);
$aso =[
[
	'JUDUL' => 'BELAJAR PHP & MySQL untuk Pemula',
	'Penulis' => 'Admin SMK',
],
[
	'JUDUL' => 'Tutorial PHP dari NOL hingga Mahir ',
	'Penulis' => 'Admin SMK',
],
[
	'JUDUL' => 'Membuat Aplikasi Web dengan PHP',
	'Penulis' => 'SMK Assalaam',
]
];

foreach ($aso as $key => $value) {
	echo $key . ' ' . $value ["JUDUL"] . "<br>";
	echo $key . ' ' . $value ["Penulis"] . "<br>";
	echo '<hr>';
}
 ?> 