<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>
        <body>
        <fieldset style="width:25%; margin-left:450px; margin-top:20px; margin-bottom:20px;">
        <form ACTION="rcetak2.php" METHOD="POST" NAME="input" style="margin-left:20px">
        <h2>Form Pendaftaran</h2><br>
        <label>No.pendaftaran</label><br>
            <input type="number" name="no" required><br>
        <label>NISN</label><br>
        <input type="number" name="nisn" maxlength="9" minlength="6" required><br>
        <label>Nama</label><br>
            <input type="text" name="nama" ><br>
        <label>Alamat</label><br>
        <textarea name="alamat"></textarea><br>
        <label>Tempat Lahir</label><br>
             <input type="text" name="ttg"><br><br>
        <label>Tanggal lahir</label>
            <input type="date" name="tanggal"><br><br>
        <label>Jenis kelamin</label><br>
            <input type="radio" name="gender" value="Male"> Male<br>
            <input type="radio" name="gender" value="Femele"> Female<br><br>
        <label>Jurusan</label><br>
            <select name="jurusan">
            <option value="RPL">RPL</option>
            <option value="TSM">TSM</option>
            <option value="TKR">TKR</option>
            <option value="Akutansi">Akutansi</option>
            <option value="Lainnya">Lainnya</option>
            </select><br>
            <label>Agama</label><br>
            <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Lainnya">Lainnya</option>
            </select><br><br>
        <label>Nama Ayah</label><br>
            <input type="text" name="namay" ><br>
        <label>Pekerjaan ayah</label><br>
            <input type="text" name="pka" ><br>
        <label>Nama Ibu</label><br>
            <input type="text" name="namai" ><br>
        <label>Pekerjaan ibu</label><br>
            <input type="text" name="pki" ><br><br>
        <label>Hobi</label><br>
   <input type="checkbox" name="hobi1" value="Nonton"checked> Nonton<br>
   <input type="checkbox" name="hobi2" value="Games"> Games<br>
   <input type="checkbox" name="hobi3" value="Renang">Renang<br>
   <input type="checkbox" name="hobi4" value="Baca">Baca<br>
   <input type="checkbox" name="hobi5" value="Tidur">Tidur<br><br>
            <input type="submit" name="simpan" value="simpan">
            <input type="reset" name="reset" value="reset"style="margin-bottom:30px;">
    
</form>
</fieldset>
</body>
</html>
