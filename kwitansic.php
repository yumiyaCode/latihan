<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <fieldset style="width:25%; margin-left:400px; margin-top:50px;margin-bottom:50px;background-color:yellow;">
    <h2>Bukti pembayaran service</h2>
    <h4>Chaldea service</h4>
<?php

if(isset($_POST['simpan'])){
    $a=$_POST['nama'];
    $b=$_POST['no'];
    $c=$_POST['tm'];
    $d=$_POST['tr'];
    $e=$_POST['alamat'];
    $f=$_POST['kerusakan'];
    $g=$_POST['tipe'];
    $h=$_POST['jum'];
    $i=$_POST['hrg'];
    $j=$_POST['pt'];
    $k=$_POST['stat'];
    $l=$_POST['method'];

    echo"Nama :".$a."<br>";
    echo"No.HP :".$b."<br>";
    echo"Tanggal masuk:".$c."<br>";
    echo"Tanggal keluar:".$d."<br>";
    echo"Alamat:".$e."<br>";
    echo"Kerusakan:".$f."<br>";
    echo"Tipe laptop:".$g."<br>";
    echo"Jumlah:".$h."<br>";
    echo"Harga:Rp.".$i."<br>";
    echo"Tertanda:".$j."<br>";
    echo"Metode pembayaran:".$l."<br>";
    echo"Status (Lunas/Belum) :".$k."<br>";
    
if($h==2){
    $dis=($i*20)/100;
    $tot=$i-$dis;
    echo"harga setelah diskon:".$tot."<br>";

}
elseif($h==4){
     $dis=($i*25)/100;
     $tot=$i-$dis;
     echo"harga setelah diskon:".$tot."<br>";
}
elseif($h==6 || $h>=6){
     $dis=($i*35)/100;
     $tot=$i-$dis               ;
     echo"harga setelah diskon:".$tot."<br>";
}
else{
    echo"anda tidak mendapat diskon;"."<br>";
}


echo"Kelengkapan:<br>";
if(isset($_POST['kel1'])){
     echo"<pre><h3>           *".$_POST['kel1'];
   
 }
 if(isset($_POST['kel2'])){
    echo"<br>           *".$_POST['kel2'];
  
}
if(isset($_POST['kel3'])){
    echo"<br>           *".$_POST['kel3'];
  
     
}
if(isset($_POST['kel4'])){
     echo"<br>           *".$_POST['kel4'];
   
     
}

}
?>
</fieldset>
</body>
