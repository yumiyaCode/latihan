<?php
$merk = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13), 
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
       
);

foreach ($merk as $isi)
{
    if (is_array ($isi))
    {
        foreach ($isi as $cetak)
        {
            echo($cetak);
            echo "<br>";
                  
        }
    }
    else
    {
        echo ($isi);
        echo "<br>";    
    }
}