<?php
include 'koneksi.php';

print_r($_POST);
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_donasi = $_POST['tanggal_donasi'];
    $jumlah_donasi = $_POST['jumlah_donasi'];
    $kategori_donasi = $_POST['kategori_donasi'];
    

        $query = "INSERT INTO donasi VALUES ('$nama', '$jenis_kelamin','$tanggal_donasi' , '$jumlah_donasi','$kategori_donasi', )";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } 
        else 
        {
            echo "<script>
                    alert('Data Berhasil Ditambah !');
                    window.location.href='index.php';
                </script>";
        }
    }
    ?>