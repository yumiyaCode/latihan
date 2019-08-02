<?php 
$user="";

if(!isset($user)){
    echo"Variable belum ada";
}
else{
    echo"Variabel ada";
}


$day=date("D");
switch($day){
    case 'Sun': $hari = "Minggu"; break;
    case 'Mon': $hari = "Senin"; break;
    case 'Tue': $hari = "Selasa"; break;
    case 'Wed': $hari = "Rabu"; break;
    case 'Thu': $hari = "Kamis"; break;
    case 'Fri': $hari = "Jumat"; break;
    case 'Sat': $hari = "Sabtu"; break;
    default: $hari = "Kiamat"; break;
}
echo"<br>Hari ini hari ".$hari;


$tahun=date("Y");
$kabisat=($tahun%4==0) ? "Kabisat" : "Bukan Kabisat";
echo"<br>Tahun <b>$tahun</b> $kabisat";
?>