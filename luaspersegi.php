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
        <label for="">Sisi</label>
        <input type="number" name="s" min="1" required>
        <br>
        <input type="submit" name="simpan">

        <?php
        if(isset($_GET['simpan'])){
            $sisi=$_GET['s'];

            function luas_persegi($s){
                $total=$s*$s;
                return $total;
            }
            $total=luas_persegi($sisi);
            echo"Luas persegi:$total";
        }

    ?>
        
   
</fieldset>
        </form>
</body>
</html>
