<html>
<head><title>Table Heading</title></head>
<body>
<table border='1' cellpadding='2' cellspacing='2' align='center' width='70%'>
<tr><th>No</th><th>Nama</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Alamat</th></tr>

<?php
include "KoneksiLatihan2a.php";
$tampilkan_isi = "select * from tbl_mahasiswa";
$tampilkan_isi_sql = mysqli_query($KoneksiLatihan2a, $tampilkan_isi);
while ($isi = mysqli_fetch_array($tampilkan_isi_sql))
{
$no = $isi['id_mhs'];
$nama = $isi['nama_mhs'];
$jeniskelamin = $isi['jenis_kelamin'];
$tanggallahir = $isi['tgl_lahir'];
$alamat = $isi['alamat'];
echo "<tr align='center'> <td>$no</td> <td>$nama</td>
<td>$jeniskelamin</td> <td>$tanggallahir</td> <td>$alamat</td> </tr>";
}
?>
</table>
</body>
</html>