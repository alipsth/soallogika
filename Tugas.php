<head>
	<title>Tugas</title>
</head>
<body>
	<table>
	<form action="tugas1.php" method="POST" name="input">
		<h1>TUGASS</h1>
		<tr>
		<td>Nama 	: </td></tr>
		<tr>
		<td><input type="text" name="nama"></td></tr>
		<tr>
		<td>NIS  	: </td></tr>
		<tr>
		<td><input type="number" name="nis"></td></tr>
		<tr>
		<td>Alamat  : </td></tr>
		<tr>
		<td><textarea name="saran" cols="40" rows="5">
		</textarea></td></tr>
		<tr>
		<td>Jenis Kelamin :</td></tr>
		<tr> 
		<td><input type="radio" name="jk" 
		value="Laki-Laki" checked>Laki-laki</td></tr>
		<tr>
		<td><input type="radio" name="jk" 
		value="Perempuan" checked>Perempuan</td></tr>
		<tr>
		<td>Agama :	<select name="Agama">     
			<option value="islam">Islam</option>     
			<option value="kristen">Kristen</option>     
			<option value="budha">Budha</option>     
			<option value="katolik">Katolik</option> 
		</select></td>
	</tr>
	<tr>
		<td>Asal sekolah : 
			<input type="text" name="asl"></td></tr>
		<tr>
		<td>Org Tua/Wali : 
			<input type="text" name="org"></td></tr>
	<tr>
		<td>Mata pelajaran yang di sukai : 	 	
		<input type="checkbox" name="band01" value="B.inggris" checked> B.inggris    
	 	<input type="checkbox" name="band02" value="Matematika">Matematika   
	 	<input type="checkbox" name="band03" value="Sejarah">Sejarah    
	 	<input type="checkbox" name="band04" value="IPA">IPA
		</td>
		</tr>
		<tr>
		<td>Total nilai ijazah smk : 
			<input type="text" name="ijazah"></td></tr>
		<tr>
		<td>Email : 
			<input type="email" name="Email"></td></tr>
			<tr>
			<td><input type="submit" name="Input" 
			value="Simpan">
			<input type="Reset" name="input" 
			value="Reset"></td>	
		</tr>
	</form>
</table>
</body>
</html>