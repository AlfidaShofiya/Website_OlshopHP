<?php
	error_reporting(0);
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Donatur</title>
</head>
<form action="ProsesInputDonasi.php">
<label for="tanggal">Masukkan Tanggal:</label><br><br>
<input type="tel" id="tanggal" name="tanggal" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
<small>Format: 123-45-678</small><br><br>
<input type="submit" value="Submit">
</form>
<body>
	<h1 style="text-align: center;">Data Donatur</h1>
	<center><a href="Inputdata.php">Tambah Data</a></center>
	<table border="1" style="margin: auto;">
		<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Donasi</th>
			<th>Jumlah Donasi</th>
			<th>Kategori Donasi</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
<tr>
            <th>1</th>
            <th>Agus</th>
            <th>Pria</th>
            <th>12-4-2021</th>
            <th>50.000</th>
            <th>Beasiswa</th>
            <td>
                        <a href="editdata.php?id=<?php echo $row['Nama'];?>">Edit</a>
                    </td>
                    <td>
                        <a href="hapusdata.php?id=<?php echo $row['Nama'];?>">Hapus</a>
                    </td>
                </tr>
		</thead>
		<tbody>
		<?php
			$no=0;
			$result = mysqli_query($koneksi, "SELECT * FROM donasi");
			while ($row = mysqli_fetch_array($result)) {
				$no++
		?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row['nama'];?></td>
					<td><?php echo $row['jenis kelamin'];?></td>
					<td><?php echo $row['tanggal donasi'];?></td>
					<td><?php echo $row['jumlah donasi'];?></td>
					<td><?php echo $row['Kategori donasi'];?></td>
					<td>
						<a href="editdata.php?id=<?php echo $row['Nama'];?>">Edit</a>
					</td>
					<td>
						<a href="hapusdata.php?id=<?php echo $row['Nama'];?>">Hapus</a>
					</td>
				</tr>
				<?php } ?>	
		</tbody>
	</table>
</body>
</html>


