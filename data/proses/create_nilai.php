<?php
include '../../config/conn.php';

if (isset($_POST['submit']))
{
	$id_siswa	= $_POST['idSiswa'];
	$id_kelas	= $_POST['namaKelas'];
	$reading	= $_POST['Reading'];
	$writing	= $_POST['Writing'];
	$listening	= $_POST['Listening'];

	$GET_kelas	= mysqli_query($conn,"SELECT nama_kelas FROM t_kelas WHERE id_kelas='$id_kelas'");
	while ($result_kelas = mysqli_fetch_array($GET_kelas))
	{
		$kelas 	= $result_kelas['nama_kelas'];
	}
}

	$id_nilai	= $kelas.$id_siswa;
	$query_create = mysqli_query($conn, "INSERT INTO t_nilai VALUES ('$id_nilai','$id_siswa','$id_kelas','$reading','$writing','$listening')");
	echo "<meta http-equiv='refresh' content='0; url=../../data/view_nilai.php'>";
?>