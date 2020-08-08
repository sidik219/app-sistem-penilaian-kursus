<?php
include '../../config/conn.php';

if (isset($_POST['submit']))
{
	$id_siswa	= $_POST['idSiswa'];
	$nama_siswa	= $_POST['namaSiswa'];
	$alamat		= $_POST['alamat'];
	$pekerjaan	= $_POST['pekerjaan'];

	$query_update = mysqli_query($conn, "UPDATE t_siswa SET nama_siswa='$nama_siswa',alamat='$alamat',pekerjaan='$pekerjaan' WHERE id_siswa='$id_siswa'");
	echo "<meta http-equiv='refresh' content='0; url=../../data/view_siswa.php'>";
}
?>