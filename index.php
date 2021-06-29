<?php
    include 'database.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    	<link rel="stylesheet" type="text/css" href="css/style.css">

    <title> Portal Berita </title>
  </head>
  <body>


<header>
	<div class="menu">
	<div class="hero"><a href="index.php">PORTAL BERITA</a></div>
	<ul class="menu-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php">Artikel</a></li>
            <li><a href="admin/index.php">Masuk Admin</a></li>
		</ul>
</div>

</header>


		<?php

		  $query = "SELECT * FROM artikel";
		  $sql = mysqli_query($db_con, $query);
		while ($data = mysqli_fetch_array($sql) ) {

		 ?>
<form class="backartikel">
	<div class="n">
<h1 class="jd"> <?php echo $data['judul']; ?> </h1>
<img class="upimg" src="img/<?php echo $data['img']; ?>">
        <h5 class="tgl"> Tanggal : <?php echo $data['tanggal']; ?></h5>
        <h5 class="tgl"> Penulis : <?php echo $data['penulis']; ?></h5>
<p class="up"> <?php echo substr($data['isi'],0,150); ?>... </p>

        <u><a class="readlink" href="read.php?id=<?php echo $data['id']; ?>">Read More</a></u>
	</div>
</form>

      
<?php } ?>

<footer class="foot">
     
    Design By Robby Satya Wicaksana
    
      </footer>

  </body>
</html>
