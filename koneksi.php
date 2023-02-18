<?php 
	$koneksi = mysqli_connect('localhost','root','','uts_hildanniar');

	if (!$koneksi) 
	{
		die("Koneksi dengan database gagal: ".mysqli_connect_errno().mysqli_connect_error());
	}
?>