
<fieldset style="width:25%; margin-left:400px; margin-top:50px;margin-bottom:50px;background-color:skyblue;color:">
<h2>Form Penggajian karyawan</h2>
<?php
if(isset($_POST['simpan'])){
$a=$_POST["no"];
$b=$_POST["nama"];
$c=$_POST["tahun"];
$d=$_POST["ni"];
$e=$_POST["detail"];
$f=$_POST["gp"];
$g=$_POST["gol"];
$h=$_POST["lem"];
$i=$_POST["bon"];
$j=$_POST["makan"];
echo"No :".$a."<br>";
echo"Nama :".$b."<br>";
 if($bulan=="1")
        {
            echo "Januari";
        }
    else if($bulan=="2")
        {
            echo "Februari";
        }
    else if($bulan=="3")
        {
            echo "Maret";
        }
    else if($bulan=="4")
        {
            echo "April";
        }
    else if($bulan=="5")
        {
            echo "Mei";
        }
    else if($bulan=="6")
        {
            echo "Juni";
        }
    else if($bulan=="7")
        {
            echo "Juli";
        }
    else if($bulan=="8")
        {
            echo "Agustus";
        }
    else if($bulan=="9")
        {
            echo "September";
        }
    else if($bulan=="10")
        {
            echo "Oktober";
        }
    else if($bulan=="11")
        {
            echo "November";
        }
    else if($bulan=="12")
        {
            echo "Desember";
        }

        
    echo"Tahun:".$c."<br>";
    echo"No.Induk:".$d."<br>";
    echo"Detail penggajian:".$e."<br>";
    echo"Gaji Pokok:Rp.".$f."<br>";
    echo"Golongan:".$g."<br>";
    echo"jam Lembur:".$h." jam<br>";
    echo"Bonus:Rp.".$i."<br>";
    echo"Makan:Rp.".$j."<br>";
    if($g==Karyawan){
        echo"Gaji lembur:Rp.10000/jam<br>";
        $kg=200000;
        $lembur=$h*10000;
        $total=$f+$i+$lembur+$j+$kg;
        echo"Bonus/gaji khusus gol:Rp.".$kg."<br>";
        echo"Total:Rp.".$total."<br>";

    }
    elseif ($g==Cleaning) {
        echo"Gaji lembur:Rp.5000/jam<br>";
        $kg=50000;
        $lembur=$h*5000;
        $total=$f+$lembur+$i+$j+$kg;
        echo"Bonus/gaji khusus gol:Rp.".$kg."<br>";
        echo"Total:Rp.".$total."<br>";

        # code...
    }
    elseif ($g==Manager) {
        echo"Gaji lembur:Rp.20000/jam<br>";
        $kg=400000;
        $lembur=$h*20000;
        $total=$f+$lembur+$i+$j+$kg;
          echo"Bonus/gaji khusus gol:Rp.".$kg."<br>";
        echo"Total:Rp.".$total."<br>";

        # code...
    }
    
}
?>
</fieldset>
