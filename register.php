<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>
        <body>
        <p>Hal Login</p>
        <fieldset style="width:40%">
        <form ACTION="rcetak.php" METHOD="POST" NAME="input">
        <h2>Login Here.....</h2>
        <label>Nama</label><br>
            <input type="text" name="nama" required><br>
        <label>Alamat</label><br>
            <textarea name="alamat"></textarea><br>
        <label>Jenis kelamin</label><br>
            <input type="radio" name="gender" value="Male"> Male<br>
            <input type="radio" name="gender" value="Femele"> Female<br>
        <label>Agama</label><br>
            <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Lainnya">Lainnya</option>
            </select><br>
        <label>Email</label><br>
            <input type="text" name="email" required><br>
        <label>Password </label><br>
            <input type="password" name="pass" required><br><br>
            <input type="submit" name="simpan" value="simpan">
            <input type="reset" name="reset" value="reset">
    
</form>
</fieldset>
</body>
</html>
