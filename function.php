<?php
//koneksi
$conn = mysqli_connect("localhost","root","","tugasphp");



function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[]= $row;
	}


	return $rows;
}



function tambah($data){
	global $conn;
     $nama = htmlspecialchars($data["nama"]);
     $umur = htmlspecialchars($data["umur"]);
     $email = htmlspecialchars($data["email"]);
     $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar
     $gambar = upload();
     if( !$gambar){
     	return false;
     }

        //querry insert data
     $query = "INSERT INTO mahasiswa
        values 
        ('','$nama','$umur','$email','$jurusan','$gambar')
        ";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
}
function upload(){
	$nmfile = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	//cek ap[akah ada gambar yg di upload
	if( $error ===4){
		echo "
        	     <script>alert ('Pilih gambar terlebih dahulu'); 
        	     </script>";
        	 return false;

	}

	//yang boleh di upload
	$ekstensigambarvalid = ['jpg','jpeg','png'];
	$ekstensigambar = explode('.', $nmfile);
	$ekstensigambar = strtolower (end($ekstensigambar));
		if( !in_array($ekstensigambar,$ekstensigambarvalid )){
			echo "
        	     <script>alert ('File yang anda masukan bukan lah gambar'); 
        	     </script>";
        	 return false;


		}
	// cek size gambar
		if($ukuran > 5000000){
			echo "
        	     <script>alert ('Size gambar terlalu besar (harus dibawah 5Mb)'); 
        	     </script>";
        	 return false;

		}
    //LOLOS UJI FILE, GAMBAR
		//generate nama baru
		$nmfilebaru = uniqid();
		$nmfilebaru .= '.';
		$nmfilebaru .= $ekstensigambar;

		move_uploaded_file($tmpname, 'img/' . $nmfilebaru);
		return $nmfilebaru;
}

function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");
	 return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	 $id = $data["id"];
     $nama = htmlspecialchars($data["nama"]);
     $umur = htmlspecialchars($data["umur"]);
     $email = htmlspecialchars($data["email"]);
     $jurusan = htmlspecialchars($data["jurusan"]);
     $gambarlama = htmlspecialchars($data["gambarlama"]);
     $gambar = htmlspecialchars($data["gambar"]);


if ($_FILES['gambar']['error'] === 4){
	$gambar = $gambarlama;
}
else{
	$gambar = upload();
}

    //querry insert data
     $query = "UPDATE mahasiswa SET
       nama = '$nama',
       umur = '$umur',
       email ='$email',
       jurusan = '$jurusan',
       gambar ='$gambar'
       WHERE id = $id ";
       mysqli_query($conn,$query);

       return mysqli_affected_rows($conn);

}


?>