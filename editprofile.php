<!DOCTYPE html>
<html>
<head>
	<title>SFR Community</title>
	<link rel="stylesheet" type="text/css" href="cssnya.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="#">MENU</a>
				<ul class="sub2">
			
			<li><a href="editprofile.php">Edit Profile</a></li>
			<li><a href="posting.php">Posting Cerita</a></li>
		</ul>
	</li>
	<ul>
	<li><a href="#">POSTINGAN</a>
				<ul class="sub1">
			<li><a href="daftarposting.php">Lihat Postingan User</a></li>
			<li><a href="semuaposting.php">Lihat<br>Semua Postingan</a></li>
		</ul>
	</li>
</nav>
</body>
</html>

<form action="" method="POST">
	<body bgcolor="#aac4e7">
		<center>
	</body>
</form>

<style type="text/css">
	.teks{
		font-size: 32px;
		font-family: Verdana;
		color: white;
		position: absolute;
		top: 140px;
		right: 550px;
	}
</style>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<sub class="teks">Edit Data User</sub>
</body>
</html>


<?php 
	include 'ulep.php';

	if(isset($_POST['submit'])){
 		$nama = $_POST['nama'];
 		$nim = $_POST['nim'];
 		$kelas = $_POST['kelas'];
 		$jk = $_POST['jk'];
 		$hobi = $_POST['hobi'];
 		$fakultas = $_POST['fakultas'];
 		$alamat = $_POST['alamat'];

 	echo "<table bgcolor=#ffb6ae><br>
 			<tr bgcolor=#dfdbf9><td>Nama</td>
 			<td> NIM </td>
 			<td> Kelas </td>
 			<td> Jenis Kelamin </td>
 			<td> Hobi </td>
 			<td> Fakultas </td>
 			<td> Alamat </td></tr>";
 	echo "<tr bgcolor=#dfdbf9>
 			<td>".$nama."</td>
 			<td>".$nim."</td>
 			<td>".$kelas."</td>
 			<td>".$jk."</td>
 			<td>".$hobi."</td>
 			<td>".$fakultas."</td>
 			<td>".$alamat."</td>
 			</tr>";
 		}
 	?>