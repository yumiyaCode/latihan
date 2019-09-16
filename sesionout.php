<?php
session_start();
if(isset($_SESSION['login'])){
    unset($_SESSION);
    session_destroy();

    echo"<h1>Anda berhasil log out</h1>";
    echo "<h2>Klik <a href='sesionl1.php'>di sini
    </a>login kembali</h2>";
    echo"<h2>anda sekarang tidak dapat masuk ke halaman 
    lagi(harus login lagi)</h2>";
}