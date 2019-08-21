
<?php

$nama="Diki Maulana";
$indo=80;
$mtk=80;
$rata2=($mtk+$indo)/2;
 
if($rata2>100 ||  $rata<0 || $mtk>100 ||$mtk <0 || indo >100 || $indo <0){
    echo"maaf nilai yang anda masukan tidak sesuai";
}

elseif($rata2>85){
    echo"nama  = ".$nama."<br>";
    echo"nilai mtk  = ".$mtk."<br>";
    echo"nilai indo  = ".$indo."<br>";
    echo"nilai rata rata = ".$rata2."<br>";
    echo"grade = ".$grade="A<br>";
    echo"keterangan = <b>Lulus</b><br>";

}
elseif($rata2>75){
    echo"nama  = ".$nama."<br>";
    echo"nilai mtk  = ".$mtk."<br>";
    echo"nilai indo  = ".$indo."<br>";
    echo"nilai rata rata = ".$rata2."<br>";
    echo"grade = ".$grade="B<br>";
    echo"keterangan = <b>Lulus</b><br>";

}
elseif($rata2>60){
    echo"nama  = ".$nama."<br>";
    echo"nilai mtk  = ".$mtk."<br>";
    echo"nilai indo  = ".$indo."<br>";
    echo"nilai rata rata = ".$rata2."<br>";
    echo"grade = ".$grade="C<br>";
    echo"keterangan = <b>Lulus</b><br>";

}
elseif($rata2<60){
    echo"nama  = ".$nama."<br>";
    echo"nilai mtk  = ".$mtk."<br>";
    echo"nilai indo  = ".$indo."<br>";
    echo"nilai rata rata = ".$rata2."<br>";
    echo"grade = ".$grade="D<br>";
    echo"keterangan = <b>Lulus</b><br>";


}
