<?php 
$nilai1=58;

if($nilai1>100){
    $grade="Nilai tidak masuk akal maks 100";
}
elseif($nilai1>=90){
   $grade="A";
}
elseif($nilai1>=80){
    $grade="B";

}
elseif($nilai1>=70){
    $grade="C";
}
elseif($nilai1>=60){
    $grade="D";
}
elseif($nilai1<=0){
    $grade="Tidak ada";
}
else{
    $grade="E";
}

echo"Nilai anda ".$nilai1." Grade anda : ".$grade."<br>";
?>
