<?php
include '../../config/conn.php';

if (isset($_POST['submit']))
{
	$nama_siswa	= $_POST['namaSiswa'];
	$alamat		= $_POST['alamat'];
	$pekerjaan	= $_POST['pekerjaan'];

	$query_create = mysqli_query($conn, "INSERT INTO t_siswa VALUES (null,'$nama_siswa','$alamat','$pekerjaan')");
	echo "<meta http-equiv='refresh' content='0; url=../../data/view_siswa.php'>";
}
?>