<html>
<head>
  <title>Data Berita</title>
</head>
<body>
  <h1>Data Berita</h1>
  <a href="logout.php">LogOut</a>
    <a href="input.php">Tambah</a><br><br>
  <table border="2" width="100%">
  <tr>
      <th>Gambar</th>
      <th>Id</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tanggal</th>
      <th>Isi</th>
  </tr>
      
  <?php
  
  include '../database.php';
  
  $query = mysqli_query($db_con, "SELECT * FROM artikel");
  
  while($data = mysqli_fetch_array($query)) {

    echo "<tr>";
    echo "<td><img src='../img/".$data['img']."' width='100' height='100'></td>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['judul']."</td>";
    echo "<td>".$data['penulis']."</td>";
    echo "<td>".$data['tanggal']."</td>";
    echo substr("<td>".$data['isi'],0,500)."</td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>