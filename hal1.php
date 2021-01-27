<?php
session_start();
if (isset($_SESSION['Login'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LUAS SEGITIGA</title>
    </head>

    <body>
        <nav>
            <a href="hal1.php">Halaman 1</a> |
            <a href="hal2.php">Halaman 2</a> |
            <a href="hal3.php">Halaman 3</a> |
            <a href="Logout.php" onclick="myFunction()">Logout</a> |
        </nav>
        <center>HALAMAN 1</center>
        <fieldset>
            <legend>FROM LUAS SEGITIGA</legend>
            <pre>
                <form action="" method="post">
                    Alas   : <input type="number" name="als"><br>
                    Tinggi : <input type="number" name="tngi"><br>
                    <input type="submit" name="simpan" value="Simpan">
                    <hr>
                </form>
            <?php if (isset($_POST['simpan'])) {
                $alas = $_POST['als'];
                echo "Alas nya   : $alas cm<br>";
                $tinggi = $_POST['tngi'];
                echo "            Tinggi nya : $tinggi cm<br>";
                echo "<hr>";
                echo "Jadi Rumus menghitung luas segitiga adalah alas x tinggi / 2 <br>";
                $kali = $alas * $tinggi;
                echo "Hasil dari alas x tinggi adalah : " . $kali . " cm<br>";
                echo "Hasil dari kali / 2 jadi hasil nya : " . $kali / 2 . " cm<br>";
            }  
            ?>
            </pre>
        </fieldset>
    </body>

    </html>

<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: Login.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>