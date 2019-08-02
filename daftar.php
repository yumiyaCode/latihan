<?php 
//cek apakah tombol sudah pernah di klik
require 'function.php';
if ( isset($_POST["submit"]) ){





        //cek data apa berhasil / tdk
       if(tambah($_POST) > 0){
            echo "
                 <script>alert ('Data Berhasil Ditambahkan,Dimohon untuk menunggu sesi seleksi') 
                 document.location.href ='index.php';
                 </script>";
       }
        else{
            echo "
                 <script>alert ('Data Gagal Ditambahkan') 
                 document.location.href ='index.php';
                 </script>";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Cocoon -Portfolio">
    <meta name="keywords" content="Cocoon , Portfolio">
    <meta name="author" content="Pharaohlab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
<!--===============================================================================================-->

    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

<title>tambah data</title>


</head>

<body>

<form action="" method="post" enctype="multipart/form-data">
	<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
        <!--=================== side menu ====================-->
        <div class="col-lg-2 col-md-3 col-12 menu_block">

            <!--logo -->
            <div class="logo_box">
                <a href="#">
                    <img src="assets/img/ua.png" alt="cocoon">
                </a>
            </div>
            <!--logo end-->

            <!--main menu -->
            <div class="side_menu_section">
                <ul class="menu_nav">
                    <li >
                        <a href="menu.php">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            List Hero
                        </a>
                    </li>
                    <li>
                        <a href="daftar.php">
                            Tambah data
                        </a>
                    </li>
                </ul>
            </div>
            <!--main menu end -->


            <!--social and copyright -->
            <div class="side_menu_bottom">
                <div class="side_menu_bottom_inner">
                    <ul class="social_menu">
                        <li>
                            <a href="#"> <i class="ion ion-social-pinterest"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-twitter"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ion ion-social-dribbble"></i> </a>
                        </li>
                    </ul>
                    <div class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Diki Maulana</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
            <!--social and copyright end -->

        </div>
        <!--=================== side menu end====================-->

        <!--=================== content body ====================-->
          <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div>
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <!--=================== contact info and form start====================-->
                            <div class="content_box">
                                <div class="content_box_inner">
                                    <div>
                                        <h3>
                                             Selamat datang di U.A ACADEMY
                                        </h3>
                                        <p>
                                          Siapapun bisa menjadi PAHLAWAN, daftar sekarang juga dan ukirkan dirimu menjadi sejarah
                                          Bersama kita di <b>U.A ACADEMY.</b>
                                        </p>


                                        <div class="mt75 row justify-content-center">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="col-10">
                                                <input type="text" name="nama" placeholder="nama" class="form-control" required>
                                            </div>
                                            <div class="col-10">
                                                <input type="text" name="umur" placeholder="umur" class="form-control" >
                                            </div>
                                            <div class="col-10">
                                                <input type="text" name="email" placeholder="email" class="form-control" >
                                            </div>
                                            <div class="col-10">
                                                <input type="text" name="jurusan" placeholder="jurusan" class="form-control" cols="4" rows="4">
                                            </div>
                                             <div class="col-10">
                                             	<!-- <img src="img/<?= $mhs['gambar']; ?>" width="50"> -->
                                                <input type="file" name="gambar" class="form-control" cols="4" rows="8">
                                            </div>

                                            <div class="col-10">
                                                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=================== contact info and form end====================-->
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-image: url('assets/img/bg/698788.png');">
                            <!--map -->
                            <div id="map" data-lon="24.036176" data-lat=" 57.039986" class="map"></div>
                            <!--map end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>
<!-- 
	<table cellpadding="10">
	<tr>
		<td><input type="hidden" name="id" value="<?= $mhs["id"]; ?>"></td>
	</tr>
	<tr>
		<td><input type="hidden" name="gambarlama" value="<?= $mhs["gambarlama"]; ?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" required value="<?= $mhs["nama"]; ?>"></td>
	</tr>
	<tr>
		<td>Umur</td>
		<td><input type="text" name="umur" value="<?= $mhs["umur"]; ?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"value="<?= $mhs["email"]; ?>"></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td><input type="text" name="jurusan" value="<?= $mhs["jurusan"]; ?>"></td>
	</tr>
	<tr>
		<td>Gambar</td><br>
		<td><img src="img/<?= $mhs['gambar']; ?>" width="70">
			<input type="file" name="gambar"></td>
		</tr>
	<tr>
		<td>
			<button type="submit" name="submit">Update</button>
		</td>
	</tr>
	</table>	
</form> -->

<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/slick.min.js"></script>
<!--Portfolio Filter-->
<script src="assets/js/imgloaded.js"></script>
<script src="assets/js/isotope.js"></script>
<!-- Magnific-popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--Counter-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
<!--===============================================================================================-->  


</body>
</html>