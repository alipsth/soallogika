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
        <title>LUAS LINGKARAN</title>
    </head>

    <body>
        <nav>
            <a href="hal1.php">Halaman 1</a> |
            <a href="hal2.php">Halaman 2</a> |
            <a href="hal3.php">Halaman 3</a> |
            <a href="Logout.php" onclick="myFunction()">Logout</a> |
        </nav>
        <center>Halaman 2</center>
        <fieldset>
            <legend>FROM LUAS LINGKARAN</legend>
            <pre>
                <form action="" method="post">
                        Jari-Jari   : <input type="number" name="jari"><br>
                        Diameter    : <input type="number" name="dia"><br>
                        <input type="submit" name="simpan" value="Simpan"><br>
                        <hr>
         <?php 
            if (isset($_POST['simpan'])) {
                $Jari = $_POST['jari'];
                echo "Jari-Jari nya  : $Jari cm<br>";
                $Diameter = $_POST['dia'];
                echo "         Diameter       : $Diameter cm<br>";
                echo "         V nya          : 3.14";
                echo "<hr>";
                echo "Jadi Rumus menghitung luas LINGKARAN adalah 3.14 x jari-jari x jari-jari<br>";
                $V = 3.14;
                $kali = $V * $Jari;
                echo "Hasil dari 3.14 x Jari-Jari adalah : " . $kali . " cm<br>";
                echo "Di x lagi dengan jari-jari Jadi hasil nya : " . $kali * $Jari  . " cm<br>";
            }  
            ?>
                </form>
            </pre>
        </fieldset>
    </body>

    </html>
<?php } else {
    header("location: Loginn.php");
    // die("Silahkan Login Terlebih dahuli");
}
?>