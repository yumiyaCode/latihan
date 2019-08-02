<?php
//koneksi
$conn = mysqli_connect("localhost","root","","tugasphp");

//ambil data dari table mahasiswa

$result = mysqli_query($conn,"SELECT * FROM mahasiswa")

//ambil data mahasiswa dari object result


?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No.</th>
			<th>Aksi.</th>
			<th>Gambar.</th>
			<th>Umur.</th>
			<th>Nama</th>
			<th>Email.</th>
			<th>Jurusan.</th>
		</tr>
<?php $i=1; ?>
<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">ubah</a>
				<a href="">hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="100" height="100"></td>
			<td><?= $row ["umur"]; ?></td>
			<td><?= $row ["nama"]; ?></td>
			<td><?= $row ["email"]; ?></td>
			<td><?= $row ["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endwhile; ?>

	</table>

</body>
</html>