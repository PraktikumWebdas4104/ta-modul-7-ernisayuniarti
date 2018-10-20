<?php
	$server 	= "localhost";
	$username 	= "root";
	$password 	= "";
	$db 		= "mahasiswa_db";
	$koneksi 	= mysqli_connect($server, $username, $password, $db);

	if (!$koneksi) {
		echo "Koneksi Gagal";
	}
?>