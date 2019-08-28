<?php

if(isset($_POST['submit'])){
  $a=$_POST["nama"];
  $b=$_POST["alamat"];
  $c=$_POST["nb"];
  $d=$_POST["hb"];
  $e=$_POST["jum"];
  $f=$_POST["desk"];
  $g=$_POST["tgl"];

  
}
?>
<fieldset style="width:25%; margin-left:400px; margin-top:50px;margin-bottom:50px;background-color:skyblue;">
<h2>Form Pendaftaran Siswa</h2>
<table border="0" rules="none">
<tr>
    <td> Nama</td>
    <td> : </td>
    <td colspan="7"><?php echo $a ?></td>
</tr>
<tr>
    <td> Nama Barang </td>
    <td> : </td>
    <td colspan="7"><?php echo $c ?></td>
</tr>
<tr>
    <td> Jumlah </td>
    <td> : </td>
    <td colspan="7"><?php echo $e ?></td>
</tr>
<tr>
    <td> Harga Barang </td>
    <td> : </td>
    <td>Rp.
<?php
if($d<=0){
     echo"input salah/tidak sesuai :)";
}
elseif($d>0 && $e>0){
    echo"".$d;
}  
else{
    echo"input salah:)";
}  

?>
</td>
</tr>
<tr>
    <td> Alamat </td>
    <td> : </td>
    <td colspan="7"><?php echo $b ?></td>
</tr>

<tr>
    <td> Deskripsi </td>
    <td> : </td>
    <td colspan="7"><?php echo $f ?></td>
</tr>
<tr>
    <td> Tanggal </td>
    <td> : </td>
    <td colspan="7"><?php echo $g ?></td>
</tr>
<tr>
    <td> Total Harga </td>
    <td> : </td>
    <td>Rp.
<?php
$de=$d*$e;
if($de<=0){
    echo"input salah :)";
   
}
 
else{
      echo"$de";
    
}  

?>
</td>
</tr>
<tr>
    <td> Harga Set.Diskon</td>
    <td> : </td>
    <td>
    
<?php
if($e>=10 && $d>0){
    $dis=($d*20)/100;
    $ou=($d-$dis)*$e;
    echo"<b>GET Diskon 20%!!</b>";
    echo"<br>=Rp.".$ou;
   
}
elseif($e>=5 && $d>0){
    $dis=($d*10)/100;
    $ou=($d-$dis)*$e;
     echo"<b>GET Diskon 10%</b>";
    echo"<br>=Rp.".$ou;
   
    
}
elseif($e<=0){
    echo"Pesanan tidak dapat diproses";
}
else{
    echo"No diskon:)";
}

?>
</td>
</tr>
</table>
</fieldset>

<hr>
<h3>P.S:</h3>
<p>Bila ada peringatan <b>salah input</b><br>
Cek kembali apakah jumlah,& harga barang sudah memiliki isi yang tepat.<br>
(jumlah barang tidak boleh kurang / sama dengan 0)</p>
