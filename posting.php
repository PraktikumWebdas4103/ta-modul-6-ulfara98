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
			<br><br><br><br><br><br><br><br><br><br>
	<table rows="20" cols="80">
	<tr>
		<td>Input Teks</td>
		<td><textarea name = "katanya"></textarea></td>
		<td><input type="submit" name="hitung" value="Hitung Kata"></td>
	</tr>
	<?php 
		if(isset($_POST['hitung'])){
		$hitung = str_word_count($_POST['katanya']);


		echo "Jumlah kata : $hitung";
	echo "<br>";
		}
		?>
	<tr>
		<td>Unggah Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	<tr>
		<td><input type="Submit" name="submit" value="Posting"></td>
	</tr>
</table>
</form>