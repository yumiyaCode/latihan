<?php 
$nilaio=80;
$nilai=80;
$nilaiq=60;
$user="Diki";
$pass="megumin";

if($user=="Diki" && $pass=="megumin"){
    echo"Login berhasil<br>";
}
else{
    echo"Login gagal<br>";
}


if($nilaio>=75){
    echo "anda lulus";
}

echo"<br>nilai anda :$nilai<br>";
if($nilai<=75){
    echo "anda tidak lulus,cik diajar nu bener";
}
else{
    echo"selamat anda lulus";
}

echo"<br>nilai anda :$nilaiq<br>";
if($nilaiq<=75){
    echo "anda tidak lulus,cik diajar nu bener";
}
else{
    echo"selamat anda lulus";
}

?>