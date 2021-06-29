<?php
  include 'database.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

<header>
  <div class="menu">
  <div class="hero"><a href="index.php">PORTAL BERITA</a></div>
  <ul class="menu-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Artikel</a></li>
      <li><a href="admin/index.php">Masuk Admin</a></li>
    </ul>
</div>

</header>


<?php

  $id = $_GET['id'];
  $query = "SELECT * FROM artikel WHERE id='$id'";
  $sql = mysqli_query($db_con, $query);
  $data = mysqli_fetch_array($sql);
 ?>

<div class="readmore">
<h1> <?php echo $data['judul']; ?> </h1>
<img class="readimg" src="img/<?php echo $data['img']; ?>">
    <h5>Tanggal : <?php echo $data['tanggal']; ?></h5>
        <h5>Penulis : <?php echo $data['penulis']; ?></h5>
<p class="read"> <?php echo $data['isi']; ?> </p>

</div>
      
      <footer class="foot">
     
    Design By Robby Satya Wicaksana
    
      </footer>
      
  </body>
</html>
