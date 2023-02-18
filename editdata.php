<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "SELECT * FROM donasi WHERE Nama = '$id'");

    while ($row = mysqli_fetch_array($result)) {
        $nama = $row["nama"];
        $jenis_kelamin = $row["jenis kelamin"];
        $jumlah_donasi = $row["jumlah donasi"];
        $pilihan_donasi = $row["pilihan donasi"];
    }
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Donatur</title>
</head>

<body>
    <form action="proseseditdata.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>
                <h3>Edit Data Donatur</h3>
            </legend>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" size="50"value="<?php echo $nama;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="text" name="jenis_kelamin" id="jenis_kelamin" size="50" value="<?php echo $jenis_kelamin; ?>" /></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tanggal" id="tanggal" size="50"value="<?php echo $tanggal;?>"/>
                    </td>
                <tr>
                    <td>Jumlah Donasi</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah donasi" id="jumlah donasi" size="50" value="<?php echo $jumlah_donasi; ?>" /></td>
                </tr>
                <tr>
                    <td>Kategori Donasi</td>
                    <td>:</td>
                    <td>
                        <select name="kategori donasi" id="kategori donasi">
                            <option value="">--Kategori Donasi-</option>
                            <option value="Beasiswa" <?php if ($posisi == 'Beasiswa') echo 'selected="selected"' ?>>Beasiswa</option>
                            <option value="Bantuan Medis" <?php if ($posisi == 'Bantuan Medis') echo 'selected="selected"' ?>>Bantuan Medis</option>
                            <option value="Panti Asuhan" <?php if ($posisi == 'Panti Asuhan') echo 'selected="selected"' ?>>Panti Asuhan</option>
                        </select>
                    </td>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="edit" id="edit">Edit</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>


