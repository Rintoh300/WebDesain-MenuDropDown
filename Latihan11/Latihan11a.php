<?php
$host		= "localhost";
$user		= ""; //sesuai dengan username database anda
$pass		= ""; //sesuai dengan password database anda
$db 		= ""; //sesuaikan dengan nama database anda
$connect	= mysqli_connect($host, $user, $pass);
//check koneksi
if($connect){
	//memilih database
	$select = mysqli_select_db($connect, $db);
	//check apakah database yang anda tuliskan ada atau tidak di dalam swrvwe mysql
	if($select){
		echo "Berhasil menemukan database " .$db;
	}
	else{
		echo "Database " .$db. "Tidak ditemukan";
	}
}
else{
	echo "Koneksi database GAGAL";
}
?>