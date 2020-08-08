<?php
include '../../config/conn.php';

if (isset($_GET['delete']))
{
	$delete = $_GET['delete'];

	$query_delete = mysqli_query($conn, "DELETE FROM t_siswa WHERE id_siswa='$delete'");
	echo "<meta http-equiv='refresh' content='0; url=../../data/view_siswa.php'>";
}
?>