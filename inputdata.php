<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>DATA DONATUR</title>
</head>

<body>
<form action="prosesinputdata.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<fieldset>
		<legend><h3>Data Donatur</h3></legend>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input name="nama" type="text" id="nama" size="50" /></td>				
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
					<td>
						<label><input type="checkbox" name="jenis_kelamin" id="jenis_kelamin" value="Pria">Pria</label>
						<label><input type="checkbox" name="jenis_kelamin" id="jenis_kelamin" value="Wanita">Wanita</label>
					</td>
			</tr>
			</td>
					<td>Tanggal Donasi</td>
				<td>:</td>
				<td><input name="tanggal_donasi" type="text" id="tanggal_donasi" size="50" /></td>				
			</tr>
			<tr>
				<td>Jumlah Donasi</td>
				<td>:</td>
				<td><input name="jumlah_donasi" type="text" id="jumlah_donasi" size="50" /></td>				
			</tr>
			<tr>
				<td>Kategori Donasi</td>
				<td>:</td>
				<td>
					<select name="kategori donasi" id="kategori donasi">
						<option value="">-- Kategori donasi --</option>
						<option value="Beasiswa">Beasiswa</option>
						<option value="Bantuan Medis">Bantuan Medis</option>
						<option value="Panti Asuhan">Panti Asuhan</option>
					</select>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
			</tr>
		</table>
	</fieldset>

</form>
</body>
</html>