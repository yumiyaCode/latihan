<!DOCTYPE html>
<html>
<head>
    
	</style>
	<title></title>
</head>
<body>
    <legend>Kwitansi pembayaran</legend><br>
    <fieldset>
    <form ACTION="" METHOD="GET">
        <label>Luas lingkaran</label>
        <label for="">Jari</label>
        <input type="number" name="jr" min="1" required>
        <br>
        <br>
        <label>kel lingkaran</label>
        <label for="">Jari</label>
        <input type="number" name="jr2" min="1" required>
        <br>
        <input type="submit" name="simpan">
        <br>
</fieldset>
        <?php
        if(isset($_GET['simpan'])){
            $jari=$_GET['jr'];
            $jari2=$_GET['jr2'];

            function luas_lingkaran($jr){
                $total=3.14*$jr*$jr;
                return $total;
            }
            $total=luas_lingkaran($jari);
            echo"Luas lingkaran:$total";
            echo"<br>";

            function kel_lingkaran($jr2){
                $total2=2*3.14*$jr2;
                return $total2; 
            }
            $total2=kel_lingkaran($jari2);
            echo"kel lingkaran:$total2";
        }

    ?>
        
   

        </form>
</body>
</html>
