<?php

function tambah_string($str){
$str = $str." , Jakarta";
return $str;
}

$str="Universitas Budi Luhur";
echo"\ $str = $str <br>";
echotambah_string($str)."<br>";
echo"\ $str =$str <br>";
?>