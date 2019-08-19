<?php

//array numeric

$a=["pengen","merlin","sq","abis","nyepend",90,"nyisa",true];

for ($i=0; $i < count($a); $i++) 
{ 
    # code...
    echo 'index array ke-'.$i.' dengan isi data '.$a[$i].'<br>';
}

//array assosiatif

$summer=["okita souji" => 4,"meltrilys" => 4,"miyamoto musashi" => 5,"osakabe hime" => 4];

foreach($summer as $get => $rarity)
{
    echo"<br>". $get. " $rarity<br>";
}



