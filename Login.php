<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "AlipSth" && $b == "Karsochrris2") {
        //menciptakan session
        $_SESSION['Login'] = $a;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='hal1.php'>di sini</a>
                untuk menuju ke halaman selanjutnya";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=Login.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
        <title>Login here...</title>
    </head>

    <body>
        <nav>
            <a href="hal1.php">Halaman 1</a> |
            <a href="hal2.php">Halaman 2</a> |
            <a href="hal3.php">Halaman 3</a> |
        </nav>
        <pre>
        <form action="" method="post">
            <h2 align="center">Login Here...</h2>
            Username   : <input type="text" name="user"><br>
            Password   : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log In">
            </pre>
        </form>
    </body>

    </html>
<?php
}
?>