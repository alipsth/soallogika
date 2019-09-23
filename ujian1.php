<html>
<head><title>Array</title></head>
<body>
<center>

</center>
<fieldset>
    <legend>From Pembelian Buku</legend>
    <pre>
    
    Nama            :<input type="text" name="nm"><br> 
    alamat          :<textarea name="al"cols="40"
         rows="5"></textarea><br>
    Jenis Kelamin   :<input type="radio" name="kelamin" value="laki laki
    "checked>Laki-Laki<input type="radio" 
    name="kelamin" value="perempuan"> Perempuan<br>
    Tanggal Beli    : <input type="date" name="tanggal"><br>         
    <FORM ACTION="" METHOD="GET">
    <label for="">Jumlah Buku     :</label><input type="number" 
    min="1"name="jml" require>
    <hr>
    <input type="submit" name="next" value="next"><input type="reset" name="reset">
    </form>
        <form action="linkujian1.php" method="POST">
<?php
    if (isset($_GET['next'])) {
        $jml = $_GET['jml'];
    for ($i=0; $i < $jml ; $i++) { 
        echo'Judul Buku     :<input type="text" name="jdl[]" require><br>
        Kode Buku   :<input type="text" name="kd[]"><br>';
        echo'Pengarang : <input type="text" name="peng[]" require><br>
        Jenis Buku :<select name="kartun[]">
            <option value="novel">Novel</option>
            <option value="viksi">Viksi</option>
            <option value="horror">Horror</option>
            <option value="cergam">Cergam</option>
            <option value="komik">Komik</option>
            </select><br>';
        echo'Harga Buku :<input type="number" name="hrg[]" require><br>';
        echo "<hr>";     
}
     
        echo'<input type="submit" name="next" value="next">'; 
}
?>
</pre>

</fieldset>
</FORM>
</body>
</html>