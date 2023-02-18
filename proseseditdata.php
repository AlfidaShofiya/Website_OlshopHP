<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['edit'])) {

 $nama = $_POST['nama'];
 $jenis_kelamin = $_POST['jenis kelamin'];
 $jumlah_donasi = $_POST['jumlah donasi'];
 $pilihan_donasi = $_POST['pilihan donasi'];

if (empty($foto)) 
{
	$query = "UPDATE donasi set jenis kelamin = '$jenis kelamin', jumlah_donasi = '$jumlah_donasi' where Nama = '$Nama' ";
}
else
{

	if (move_uploaded_file($tmp, $path)) 
	{
		$query = "UPDATE donasi set  jenis kelamin = '$jenis kelamin',  jumlah_donasi = '$jumlah_donasi' where Nama = '$Nama' ";
}
}

$result = mysqli_query($koneksi, $query);

if (!$result) 	
{
	die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
}
else
{
	echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script> ";
}
}

?>