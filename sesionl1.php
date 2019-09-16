<?php

session_start();
if(isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    //periksa login

    if($user == "BB" && $pass== "123"){
        //membuat sesion
        $_SESSION['login']=$user;
        //hal pemeriksaan sesion
        echo"<h1>anda berhasil login</h1>";
        echo"<h2>Pilihan program:</h2><br> 
        <a href='sesionv1.php'>Seleksi TNI</a><br>
        <a href='sesionv2.php'>Luas lingkaran</a><br>
        <a href='sesionv3.php'>Luas persegi</a><br>
        <br>
        untuk menuju halaman yang diinginkan";
       }
    } else{
    ?>
    <html>
         <head>
             <title>Login here</title>
    </head>
    <body>
    <form action="" method="post">
<h2>Login Here...</h2>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="login" value="Log In">
</form>
    </body>
</html>
    <?php } ?>