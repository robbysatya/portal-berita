<?php 

include '../database.php';

 ?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title> Daftar </title>
</head>
<body>

<form method="POST" class="form">

	<img class="dafimg" src="../img/user.png">
 <div class="judul2">Daftar</div>

		<div class="box2">
			<input type="text" name="nama" placeholder="Nama Anda...">
			<br>
			<input type="text" name="username"  placeholder="Username...">
			<br>
			<input type="password" name="password" placeholder="*******">
			<br>
			<button type="submit" name="submit">DAFTAR</button>
			<br>
			<br>
			Sudah Punya Akun? <a href="index.php">Login</a>
		</div>
</form>

</body>
</html>

<?php 

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$query = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password') ";

		$sql = mysqli_query($db_con, $query);
		
		echo "<script>alert('Berhasil Register')</script>";

	}

 ?>