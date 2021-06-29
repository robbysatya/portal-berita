<?php
  session_start();
  include '../database.php';
 ?>

 <?php
        if (isset($_SESSION['username'])&&isset($_SESSION['password'])) {
  ?>

<?php }else{ ?>

<!-- HALAMAN LOGIN -->
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Login Admin </title>

  </head>
  <body>


<!-- FORM LOGIN -->
<form class="log" method="POST" >
    <img class="logimg" src="../img/user.png">
  <div class="judul">Masuk Akun</div>

      <div class="box">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="********"><br>
        <button type="submit" name="submit">LOGIN</button>

        <br>
        <br>
        Anda Belum Punya Akun?  <a href="daftar.php">Daftar Disini</a>
          <br>
          <br>
        <a href="../index.php">Kembali Ke Home</a>
      </div>

</form>

<?php

    if (isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = md5($_POST['password']);

       $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
       $sql = mysqli_query($db_con, $query);
       $cek = mysqli_num_rows($sql);
       print_r($cek);

       if($cek>0) {
         $_SESSION['username'] = $username;
         $_SESSION['password'] = $password;
            
            header('location:dataview.php');
            
        }else{
              echo "<script>alert('LOGIN GAGAL!!')</script>";
    }
  }

 ?>

  </body>
</html>

<?php } ?>