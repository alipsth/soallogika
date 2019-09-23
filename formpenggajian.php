
<?php 
$arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"); 
$day = date ("w");		 //0 - 6 of day 
 
echo "Hari : <b>" . $arrDay[$day]."</b>";
echo "<br>". date("F j, Y, g:i a");   // April 13, 2006, 9:43 am 
 ?>
<html>
<head>
	<title>Form Penggajian</title>
</head>
<body>
<table>
	<form action="formpenggajian1.php" method="POST" name="input">
		<center><h1>PENGGAJIAN</h1></center>
		<tr>
		<td>Nama 	: </td></tr>
		<tr>
		<td><input type="text" name="nama"></td></tr>
		<tr>
		<td>NIP  	: </td></tr>
		<tr>
		<td><input type="number" name="nip"></td></tr>
		<tr>
		<td>Alamat  : </td></tr>
		<tr>
		<td><textarea name="almt" cols="40" rows="5">
		</textarea></td></tr>
		<tr>
		<td>Jenis Kelamin :</td></tr>
		<tr>
		<td><input type="radio" name="jk" 
		value="Laki-Laki" checked>Laki-laki
		<input type="radio" name="jk" 
		value="Perempuan" checked>Perempuan</td></tr>
		<tr>
		<td>Status :	<select name="status">     
			<option  value="menikah" >Menikah</option>     
			<option value="belum menikah">Belum Menikah</option>      
		</select></td></tr>
				<tr>
		<td>Jabatan :	<select name="jabatan">     
			<option value="HRD">HRD</option>     
			<option value="MANAGER">MANAGER</option>
			<option value="STAFF">STAFF</option>
			<option value="KARYAWAN">KARYAWAN</option>      
		</select></td></tr> 
		<tr>
		<td>Potongan : 	 	
		<input type="checkbox" name="p1" value="BPJS" checked> BPJS    
	 	<input type="checkbox" name="p2" value="Koperasi" checked>Koperasi   
	 	<input type="checkbox" name="p3" value="Jamsostek" checked>Jamsostek    
		</td>
		</tr>
		<tr>
		<td>Golongan :	<select name="golongan">     
			<option value="A1">A1</option>     
			<option value="A2">A2</option>
			<option value="A3">A3</option>      
		</select></td></tr>
		<tr>
			<td><input type="submit" name="Simpan" value="Simpan">
				<input type="reset" name="Reset" value="Reset"></td></tr>
	</form>
</table>
</body>
</html>
