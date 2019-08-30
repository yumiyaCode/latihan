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
         <label for="">Nama</label>
        <input type="text" name="nm" required>
        <br> 
        <label for="">Berat Badan</label>
        <input type="number" name="bb" min="1" required>
        <br>
        <label for="">Tinggi badan</label>
        <input type="number" name="td" min="1" required>
        <br>
        <input type="submit" name="simpan">

        </fieldset>
        <?php
        if(isset($_GET['simpan'])){
            $nama=$_GET['nm'];
            $berat=$_GET['bb'];
            $tinggi=$_GET['td'];

            function penerimaan_tni($nm,$bb,$td){
              if(($bb<60 && $bb > 50)&& $td>165){
                $info="Anda di terima";
                return $info;
              }
              elseif(($bb>60 || $bb < 50)&& $td<165){
                $info="gagal";
                return $info;
              }
              else{
                  $info="gagal";
                  return $info;
              }
              }
              $info=penerimaan_tni($nama,$berat,$tinggi);
              echo"$nama<br>";
              echo" Berat badan = ".$berat." Tinggi = ".$tinggi."<br>$info";
        }

    ?>
        
   

        </form>
</body>
</html>
