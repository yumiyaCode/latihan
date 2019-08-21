<?php


for ($i=1; $i <=10; $i++) {
    echo"perkalian ".$i."<br><br>";
    for ($j=1; $j <=10; $j++) {
        $r=$i*$j;
        if($r%2==1){
        echo$i."x".$j." = ".$r." bilangan ganjil<br>";
        }
        else{
            echo$i."x".$j." = ".$r." bilangan genap<br>";
        }
    }
echo"<br>";
}