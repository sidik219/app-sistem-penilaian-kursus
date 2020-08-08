<?php
include '../../config/conn.php';

if (isset($_GET['delete']))
{
	$delete = $_GET['delete'];

	$query_delete = mysqli_query($conn, "DELETE FROM t_kelas WHERE id_kelas='$delete'");
	echo "<meta http-equiv='refresh' content='0; url=../../data/view_kelas.php'>";
}
?>