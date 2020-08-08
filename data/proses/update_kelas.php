<?php
include '../../config/conn.php';

if (isset($_POST['submit']))
{
	$id_kelas	= $_POST['idKelas'];
	$nama_kelas	= $_POST['namaKelas'];
	$th_ajar	= $_POST['thAjar'];

	$query_update = mysqli_query($conn, "UPDATE t_kelas SET nama_kelas='$nama_kelas',th_ajar='$th_ajar' WHERE id_kelas='$id_kelas'");
	echo "<meta http-equiv='refresh' content='0; url=../../data/view_kelas.php'>";
}
?>