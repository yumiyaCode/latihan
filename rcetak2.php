<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>

     <body>

     <fieldset style="width:30%; margin-left:400px; margin-top:50px;">
     <h2 style="color:blue; margin-left:40px;">Form Pendaftaran Anda...</h2>
<?php

if(isset($_POST['simpan'])){
 $a=$_POST['no'];
 $b=$_POST['nisn'];
 $c=$_POST['nama'];
 $d=$_POST['alamat'];
 $e=$_POST['ttg'];
 $f=$_POST['tanggal'];
 $g=$_POST['gender'];
 $i=$_POST['jurusan'];
 $j=$_POST['agama'];
 $k=$_POST['namay'];
 $l=$_POST['pka'];
 $m=$_POST['namai'];
 $n=$_POST['pki'];

 
 echo"<pre><h3>NO.Pendaftaran :".$a;
     echo"<br>NISN           :".$b;
     echo"<br>Nama           :".$c;
     echo"<br>Alamat         :".$d;
     echo"<br>Tempat lahir   :".$e;
     echo"<br>Tanggal lahir  :".$f;
     echo"<br>Jenis kelamin  :".$g;
     echo"<br>Jurusan        :".$i;
     echo"<br>Agama          ;".$j;
     echo"<br>Nama ayah      ;".$k;
     echo"<br>Pk.ayah        :".$l;
     echo"<br>Nama ibu       :".$m;
     echo"<br>Pk ibu         :".$n;
     echo"<br>Hobi pilihan   :</h3></pre>";
 if(isset($_POST['hobi1'])){
     echo"<pre><h3>               *".$_POST['hobi1'];
   

 }
 if(isset($_POST['hobi2'])){
    echo"<br>               *".$_POST['hobi2'];
  
}
if(isset($_POST['hobi3'])){
    echo"<br>               *".$_POST['hobi3'];
  
     
}
if(isset($_POST['hobi4'])){
     echo"<br>               *".$_POST['hobi4'];
   
     
}
if(isset($_POST['hobi5'])){
     echo"<br>               *".$_POST['hobi5']."</h3></pre>";
   
}
}
?>
 </fieldset>
</body>
</html>