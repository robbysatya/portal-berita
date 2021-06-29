<?php 
include '../database.php';
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$img =$_FILES['img']['name'];
$tmp = $_FILES['img']['tmp_name'];
$namagambar =  date('dmYHis').$img;
$path = "../img/" .$namagambar;

if(move_uploaded_file($tmp, $path)){
    $sql = 'INSERT INTO artikel(judul,tanggal,penulis,img,isi) VALUES ("'.$judul.'","'.$tanggal.'","'.$penulis.'","'.$namagambar.'","'.$isi.'")';
    $query	= mysqli_query($db_con,$sql);
    
    if($query) {
        echo '<h1>Artikel Sudah Ditambahkan<h1>';
 
    }else{
        echo 'Gagal Menambahkan Artikel';
    }
}
 ?>

<div>
    <a href="input.php">Tambah</a>
    <a href="dataview.php">Kembali Ke Data Artikel</a>

</div>