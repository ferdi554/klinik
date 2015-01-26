<?php
session_start();

if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="frontoffice"){
    die("Anda bukan admin");
}
?>
<html>
<head>
	<title>Klinik | Tambah Data Pasien Baru</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body id='fitur'>
	<div id='menukiri'>
		<center><font class='b' style='color:#4B77BE;'> Front Office <font class='k' style='color:#4B77BE;'>Features</font> </font></center>
		<a href='pasienbaru.php'>
		<div class='menukiri1-active'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Tambah data pasien baru</font>
		</div>
		</a>
		<a href='dokter.php'><div class='menukiri1'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Tambah data Dokter</font>
		</div>
		</a>
		<a href='lihatdata.php'>
		<div class='menukiri1'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Lihat data pasien</font>
		</div>
		</a>
		<a href='lihatdokter.php'>
		<div class='menukiri1'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Lihat data dokter</font>
		</div>
		</a>
		<a href='editdata.php'>
		<div class='menukiri1'>
			<font class='k' style='margin-left:95px;margin-top:15px;display:inline-block;'>Edit data pasien</font>
		</div>
		</a>
		<br><br>
		<a href="javascript:history.back()"><img src='../img/back.png' height='50' style='margin-left:95px;'></a>
		<a href="frontoffice.php"><img src='../img/home.png' height='50' style='margin-left:55px;'></a>
	</div>
	<div id='kanan'>
		<font class='k' style='color:white;margin-top:20px;margin-left:20px;display:inline-block;'>Tambah data<br><br><a href="pasienbaru.php">Pasien Baru</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="pasienlama.php" style='color:#2C3E50;'>Pasien Lama</a></font><br>
		<font class='sk' style='color:white;margin-top:20px;margin-left:20px;display:inline-block;'>Anda dapat memasukkan data pasien baru disini, silahkan isi form yang telah disediakan</font><br><br>
		<form action='insertlama.php' method='post'>
		<label for='usernamepasien'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Username</font></label>
		<br><input name='username' type='text' id='username'><br>
		<label for='umur'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Umur Pasien</font></label>
		<br><input name='umur' type='text' id='lainlain'><br>
		<label for='gejala'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Gejala Yang Dirasakan</font></label>
		<br><input name='gejala' type='text' id='lainlain'><br>
		<label for='penyakitsebelum'><font class='sk' style='color:white;margin-left:20px;display:inline-block;'>Penyakit Yang Pernah Diderita</font></label>
		<br><input name='penyakitsebelum' type='text' id='lainlain'><br><br>
		<input type='submit' id='submit2' value='Submit'>
		</form></div>
</body>
</html>