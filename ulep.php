<form action="" method="POST">
	<body bgcolor="#aac4e7">
		<center>
			<br><br><br><br><br><br><br><br><br><br>
			
		<table bgcolor="#e2fbf9">
			<tr>
				<td> Nama 		: </td>
				<td> <input type="text" name="nama"> </td>
			</tr>
			<tr>
				<td> NIM 		: </td>
				<td> <input type="text" name="nim" maxlength="10" minlength="10"> </td>
			</tr>
			<tr>
				<td> Kelas 		: </td>
				<td> <input type="radio" name="kelas" value="MI-01">MI-01 </td>
				<td> <input type="radio" name="kelas" value="MI-02">MI-02 </td>
				<td> <input type="radio" name="kelas" value="MI-03">MI-03 </td>
				<td> <input type="radio" name="kelas" value="MI-04">MI-04 </td>
			</tr>
			<tr>
				<td> Jenis Kelamin 	: </td>
				<td> <input type="radio" name="jk" value="LakiLaki">Laki-Laki </td>
				<td> <input type="radio" name="jk" value="Perempuan">Perempuan </td>
			</tr>
			<tr>
				<td> Hobi 		: </td>
				<td> <input type="checkbox" name="hobi" value="desain">Desain </td>
				<td> <input type="checkbox" name="hobi" value="berenang">Berenang </td>
				<td> <input type="checkbox" name="hobi" value="melukis">Melukis </td>
				<td> <input type="checkbox" name="hobi" value="fotografi">Fotografi </td>
			</tr>
			<tr>
				<td>Fakultas 	:</td>
				<td> <select name="fakultas">
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
				<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Teknik Elektro" >Fakultas Teknik Elektro</option>
				<option value="Fakultas Ilmu Kreatif" >Fakultas Ilmu Kreatif</option>
				</select></td>
			</tr>
			<tr>
				<td> Alamat 	: </td>
				<td> <input type="textarea" name="alamat"> </td>
			</tr>
			<tr>
				<td> <input type="submit" name="submit" value="Simpan"> </td>
			</tr>
		</table>
	</body>
</form>

<?php
	$servername = "localhost";
 	$nim = "root";
 	$nama = "";
 	$db = "mahasiswa";
 	$con = new mysqli($servername, $nim, $nama, $db);

 	if($con==false){
 		die("Koneksi Gagal" . $con->connect_error);
 	
 	}
 	if(isset($_POST['submit'])){
 		$nama = $_POST['nama'];
 		$nim = $_POST['nim'];
 		$kelas = $_POST['kelas'];
 		$jk = $_POST['jk'];
 		$hobi = $_POST['hobi'];
 		$fakultas = $_POST['fakultas'];
 		$alamat = $_POST['alamat'];
 		$sql = "INSERT INTO telyu (nim,nama,kelas,jk,hobi,fakultas,alamat) values ('$nim','$nama','$kelas','$jk','$hobi','$alamat','$fakultas')";

	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
	}

	?>