<html>
<head>
<title>Purche</title>
</head>

<body style="background-color:skyblue;">
    <fieldset style="margin-right:100px; margin-left:200px; width:60%; background-color:white; margin-top:50px">
<form method="post" action="getpurche.php" NAME="input">
    <h2 style="color:green">Form pembelian barang</h2>
    <hr>
<table border="0">
<tr>
    <td> Nama </td>
    <td> : </td>
    <td colspan="5"> <input type="text" name="nama" size="24" required/> </td>
    
</tr>
<tr> <td> Nama barang </td>
    <td> : </td>
    <td colspan="7"> <input type="text" name="nb" size="24" required/></td></tr>
<tr>
    <td> Alamat </td>
    <td> : </td>
    <td colspan="7"><textarea name="alamat" cols="41" rows="7"required></textarea></td>
</tr>
<tr>
    <td> Jumlah Barang </td>
    <td> : </td>
    <td colspan="5"> <input type="number" name="jum"required/></td>
</tr>
<tr>
    <td> Harga Barang </td>
    <td> : </td>
    <td colspan="5"> <input type="number" name="hb"required/>/satuan</td>
</tr>
<tr>
    <td> Deskripsi </td>
    <td> : </td>
    <td colspan="7"><textarea name="desk" cols="41" rows="7"required></textarea></td>
</tr>
<tr>
    <td> Tanggal pembelian </td>
    <td> : </td>
    <td colspan="7"><input type="date" name="tgl" cols="41" rows="7"required></td>
</tr>
<tr>
    <td colspan="9" align="right"><input type="submit" name="submit" value="Simpan" /><input type="reset" name="reset" value="Reset" /></td>
</tr>
</table>
</fieldset>
</body>
</html>


<font color="blue"><h3></h3></font>
