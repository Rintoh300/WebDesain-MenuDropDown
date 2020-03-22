<?php
include "KoneksiLatihan2a.php";
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$tanggallahir = $_POST['tahun'].'-'.$_POST['bulan'].'-'.$_POST['tanggal'];
$alamat = $_POST['alamat'];
$insert = "INSERT INTO tbl_mahasiswa(nama_mhs,jenis_kelamin,tgl_lahir,alamat)
values('$nama','$jeniskelamin','$tanggallahir','$alamat')";
$insert_query = mysqli_query($KoneksiLatihan2a,$insert);
if($insert_query){
echo "Insert Record Berhasil<br />";
echo "Anda Telah berhasil Menginput data:";
echo $nama,"<br />",$jeniskelamin,"<br />",$tanggallahir,"<br/>",$alamat ; }
else
echo "Gagal Insert Record";
?>