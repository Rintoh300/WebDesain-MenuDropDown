<?php
$host = "localhost";
$username = "";//sesuai dengan username database anda
$password = "";//sesuai dengan password database anda
$database = "";//sesuaikan dengan nama database anda
$KoneksiLatihan2a = mysqli_connect($host, $username, $password);
$pilihdatabase = mysqli_select_db($KoneksiLatihan2a, $database);
if ($pilihdatabase) echo "Berhasil";
else echo "Gagal Koneksi";
?>