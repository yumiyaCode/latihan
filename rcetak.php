<?php
if(isset($_POST['simpan'])){
    $us=$_POST['nama'];
    $al=$_POST['alamat'];
    $ag=$_POST['agama'];
    $gd=$_POST['gender'];
    $eml=$_POST['email'];
    $ps=$_POST['pass'];
    if (($eml=="@gmail" && $ps==123)&& $gd=="Male"){
        echo "<br>Nama :".$us;
        echo "<br>Alamat :".$al;
        echo "<br>Agama :".$ag;
        echo "<br>Jenis kelamin :".$gd;
        echo "<br>Email :".$eml;
        echo "<br>Status :<b>Active</b>";
    }   
    elseif(($eml=="@gmail" && $ps==123)&& $gd=="Femele"){
        echo "<br>Nama :".$us;
        echo "<br>Alamat :".$al;
        echo "<br>Agama :".$ag;
        echo "<br>Jenis kelamin :".$gd;
        echo "<br>Email :".$eml;
        echo "<br>Status :<b>Active</b>";
    }   
     else {
        echo "<br>Nama :".$us;
        echo "<br>Alamat :".$al;
        echo "<br>Agama :".$ag;
        echo "<br>Jenis kelamin :".$gd;
        echo "<br>Email :".$eml;
        echo "<br>Status :<b>TDK Active</b>";
    }
}
