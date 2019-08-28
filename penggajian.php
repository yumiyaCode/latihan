<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
	      
	</style>
	<title></title>
</head>
<body style="background-color:purple;"><br>
    <fieldset style="margin-right:100px; margin-left:50px;background-color:white;">
      <form ACTION="getpenggajian.php" METHOD="POST" NAME="input">
         <h2>Chaldea Corporation</h2>
         <hr>
    <table rules="none" border="0" width="100%" face="arial">
<tr>
          <td><label>No.Penggajian</label><br>
            <input type="number" name="no"style="width:100px" required>
        </td>
</tr>
 <tr>
          <td><label>Karyawan</label><br>
            <input type="text" name="nama"style="width:400px"required>
        </td>
</tr>
 <tr>
    <td><label>Periode Bulan</label>
        <select name="bulan" required>
        <option value="1" selected="selected"> Jan </option>
        <option value="2" > Feb </option>
        <option value="3" > Mar </option>
        <option value="4" > Apr </option>
        <option value="5" > Mei </option>
        <option value="6" > Jun </option>
        <option value="7" > Jul </option>
        <option value="8" > Agu </option>
        <option value="9" > Sep </option>
        <option value="10" > Okt </option>
        <option value="11" > Nov </option>
        <option value="12" > Des </option></select>
        Tahun:<input type="number" name="tahun"required/> </td>       
        </td>
 <tr>
          <td><label>No.Induk</label><br>
            <input type="number" name="ni"style="width:200px" required>
        </td>
</tr>
   <td><b>Detail Penggajian :</b><br>
   <textarea name="detail" style="width:400px; height:100px;"required></textarea></td>
 <tr>
          <td><label>Gaji.Pokok</label><br>
            <input type="number" name="gp"style="width:200px"required>
        </td>
</tr>
 <tr>
        <td><label>Golongan</label><br>
            <input type="radio" name="gol" value="Karyawan"required> Karyawan/staff<br>
            <input type="radio" name="gol" value="Cleaning"> Cleaning service<br>
            <input type="radio" name="gol" value="Manager"> Manager<br><br></td>
</tr>
   <tr>
        <td>Jam lembur<br>
        <input type="number" name="lem"style="width:400px"required></td>
        <td>Bonus<br>
        <input type="number" name="bon"style="width:400px"required></td>
</tr>
<tr>
        <td>Tunjangan makan<br>
        <input type="number" name="makan"style="width:400px"required></td>

          <td>
            <br><input type="submit" name="simpan" value="simpan">
            <input type="reset" name="reset" value="reset">
        </td>>
</tr>

</table>
<hr>
</fieldset>
        </form>
</body>
</html>
