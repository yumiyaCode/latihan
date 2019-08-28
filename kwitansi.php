<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
	       textarea{
               width:1100px;
               height:70px;
           }
           h3{
               color:red;
           }
           h2{
               font-family:arial;
               color:red;
           }
           h4{
               margin-left:200px;
           }
	</style>
	<title></title>
</head>
<body>
    <legend>Kwitansi pembayaran</legend><br>
    <fieldset style="margin-right:100px; margin-left:10px;background-color:skyblue;">
      <form ACTION="kwitansic.php" METHOD="POST" NAME="input">
         <h2>Chaldea Laptop service</h2>
         <h4>Menerima segala macam service laptop!! dijamin MURAHHHH<br>
        Alamat:JL.Batuwangi no32<br>
        Kontak:0222-33-4455-66</h4>
         <hr>
    <table rules="none" border="0" width="100%" face="arial">
    <tr>
        <td><label>Nama</label><br>
            <input type="text" name="nama"style="width:400px"required></td>
        <td><label>Tanggal masuk</label><br>
            <input type="date" name="tm" style="width:300px" required></td>
    </tr>
    <tr>
        <td><label>No.HP</label><br>
            <input type="number" name="no"style="width:400px"required></td>
        <td><label>Tanggal keluar</label><br>
            <input type="date" name="tr" style="width:300px" required><br><br><br></td>
</tr>
<tr>
        <td colspan="2"><label>Alamat</label><br>
        <textarea name="alamat"required></textarea><br><td>
</tr>
        </table>
<br>
        <table rules="none" border="1" width="100%" face="arial" style="height:30px;">
<tr>
   <td><label><b>Kelengkapan : </b></label></td>
   <td><input type="checkbox" name="kel1" value="Charger"required> Charger</td>
   <td><input type="checkbox" name="kel2" value="CD/DVD"> CD/DVD </td>
   <td><input type="checkbox" name="kel3" value="Tas">Tas</td>
   <td><input type="checkbox" name="kel4" value="Mouse">Mouse</td>
        </tr>
    </table>
<br>
  <b>Jenis service/kerusakan :</b>
   <textarea name="kerusakan"required></textarea><br>
 <table rules="none" border="0" width="100%" face="arial">
    <tr>
        <td>Tipe laptop :<br>
        <input type="text" name="tipe"style="width:400px"required></td>
        <td>Banyaknya barang service:<br>
        <input type="number" name="jum"style="width:400px"required></td>
        </tr>
        <tr>
        <td>Harga service:<br>
        <input type="number" name="hrg"style="width:400px"required></td>
        <td>Tertanda :<br>
        <input type="text" name="pt"style="width:400px"required></td>
        </tr>
        <tr>
        <td><label>Status pembayaran</label><br>
            <input type="radio" name="stat" value="Lunas"required> Lunas<br>
            <input type="radio" name="stat" value="Belum"> Belum lunas<br><br></td>
        <td>
            <br><input type="submit" name="simpan" value="Simpan">
            <input type="reset" name="reset" value="Reset">
        </td>></tr>
        <tr>
        <td> <label>Metode Pembayaran</label>
            <select name="method"required>
            <option value="Kontan">Kontan</option>
            <option value="Cicilan">Cicilan</option>
            <option value="Transfer">Transfer</option>
            <option value="Lainnya">Lainnya</option>
            </select><br><br></td></tr>
        </table>
        <hr>
        <h3>Dapatkan diskon di setiap nomor genap pembelian!!!<br>
            Seperti :<br>
            service 2 laptop diskon 20%<br>
            service 4 laptop diskon 25%<br>
            dan 6 laptop 35% / lebih dari 6</h3>
        
   
</fieldset>
        </form>
</body>
</html>
