

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
         <label for="">Nama</label>
        <input type="text" name="nm" required>
        <br> 
        <label for="">Berat Badan</label>
        <input type="number" name="bb" min="1" required>
        <br>
        <label for="">Tinggi badan</label>
        <input type="number" name="td" min="1" required>
        <br>
        <input type="submit" name="simpan">

        </fieldset>
        <?php
        if(isset($_GET['simpan'])){
            $nama=$_GET['nm'];
            $berat=$_GET['bb'];
            $tinggi=$_GET['td'];

            function penerimaan_tni($nm,$bb,$td){
              if(($bb<60 && $bb > 50)&& $td>165){
                $info="Anda di terima";
                return $info;
              }
              elseif(($bb>60 || $bb < 50)&& $td<165){
                $info="gagal";
                return $info;
              }
              else{
                  $info="gagal";
                  return $info;
              }
              }
              $info=penerimaan_tni($nama,$berat,$tinggi);
              echo"$nama<br>";
              echo" Berat badan = ".$berat." Tinggi = ".$tinggi."<br>$info";
        }

    ?>
        
   

        </form>
</body>
</html>
