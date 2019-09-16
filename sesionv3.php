<?php 
session_start();
if(isset($_SESSION['login'])){
    //menampilkan
echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
echo "<h3>Halaman ini hanya bisa diakses jika Anda sudah
login</h3>";
echo "<a href='sesionout.php'>[log out]</a>
<a href='sesionv1.php'>[Seleksi TNI]</a>
<a href='sesionv2.php'>[Luas lingkaran]</a>
<a href='sesionv3.php'>[Luas persegi]</a>";
}else{
    //sesion belum ada
    die("anda belum login!! anda belum terdaftar silahkan login
    <a href='sesionl1.php'>di sini</a>");
}

?>
<!DOCTYPE html>
<html>
<head>
    
	</style>
	<title></title>
</head>
<body>
  
    <fieldset>
    <form ACTION="" METHOD="GET">
        <label for="">Sisi</label>
        <input type="number" name="s" min="1" required>
        <br>
        <input type="submit" name="simpan">
</fieldset><br>
        <?php
        if(isset($_GET['simpan'])){
            $sisi=$_GET['s'];

            function luas_persegi($s){
                $total=$s*$s;
                return $total;
            }
            $total=luas_persegi($sisi);
            echo"Luas persegi:$total";
        }

    ?>
        
   

        </form>
</body>
</html>
