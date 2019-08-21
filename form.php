<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>
        <body>
        <form ACTION="" METHOD="POST" NAME="input">
            <label>Nama saya</label>
            <input type="text" name="a" required><br>
            <input type="submit" name="simpan" value="simpan">
            <input type="reset" name="hapus" value="hapus">
</form>
<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['a'];
    echo"$nama";

}
?>
        </body>

</html>
