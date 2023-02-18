<?php
    error_reporting(0);
    include 'koneksi.php';

if (isset($_GET['id'])) {

    $NIM = $_GET['id'];

    $file = mysqli_query($koneksi, "SELECT foto FROM donasi WHERE Nama = '$Nama'");
    $hasil = mysqli_fetch_array($file);

    $query = "DELETE FROM donasi WHERE Nama = '$Nama'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) 
    {
        die("Data gagal di tambahkan;". mysqli_errno($koneksi).mysqli_error($koneksi));
    } else {
        echo "<script>
                alert('Data Berhasil Dihapus !'); window.location.href='index.php';
              </script>";
    }
}
?>