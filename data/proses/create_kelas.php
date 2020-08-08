<?php
include '../../config/conn.php';

if (isset($_POST['submit']))
{
	$nama_kelas	= $_POST['namaKelas'];
	$th_ajar	= $_POST['thAjar'];

	$query_create = mysqli_query($conn, "INSERT INTO t_kelas VALUES (null,'$nama_kelas','$th_ajar')");
	echo "<meta http-equiv='refresh' content='0; url=../../data/view_kelas.php'>";
}
?>