<?php
include '../../config/conn.php';

//untuk mengconvert data dari database ke excel
header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=Data_Siswa.xls");
?>

<style type="text/css">
	.center{
		margin-left: auto;
		margin-right: auto;
	}
</style>

<h3>Data Siswa Kursus Bahasa Inggris ABC</h3>

<table class="center" border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Siswa</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
	</thead>

	<?php
		$sql_view = mysqli_query($conn, 'SELECT * FROM t_siswa');

		$no = 1;
		while ($result = mysqli_fetch_array($sql_view)){
	?>

	<tbody>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $result['nama_siswa']; ?></td>
			<td><?php echo $result['alamat']; ?></td>
			<td><?php echo $result['pekerjaan']; ?></td>
		</tr>
	</tbody>

	<?php
		}
	?>
</table>