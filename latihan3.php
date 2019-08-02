<?php 
// $warna = 10;


// switch($warna){
//     case 1: echo"Aqua";break;
//     case 2: echo"Ruby";break;
//     case 3: echo"Tosca";break;
//     case 4: echo"Violet";break;
//     case 5: echo"Maroon";break;
//     case 6: echo"Black";break;
//     default:echo"404 NOT Found";break;
// }
$alph="A";

switch($alph){
    case 'A':$grade="A = Sangat Baik";break;
    case 'B':$grade="B = Baik";break;
    case 'C':$grade="C = Cukup";break;
    case 'D':$grade="D = Kurang";break;
    case 'E':$grade="E = Kurang Sekali";break;
    default:$grade="Watir teuing";break;
}
echo"Sikap anda <b>$grade</b>";

?>