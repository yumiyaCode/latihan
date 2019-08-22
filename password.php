<?php
if(isset($_POST['simpan'])){
    $us=$_POST['username'];
    $ps=$_POST['pass'];
    if(($us=="kama" || $us=="matou@sakura.gmail") && $ps="sakamotoMayaa"){
    echo"<h2>Login berhasil</h2>";
    }
    else{
        echo"<h2>Gagal</h2>";
    }
    
}