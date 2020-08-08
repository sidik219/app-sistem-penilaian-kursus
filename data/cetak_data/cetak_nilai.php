<?php
include '../../config/conn.php';

//untuk mengconvert data dari database ke excel
header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=Data_Nilai.xls");
?>

<style type="text/css">
	.center{
		margin-left: auto;
		margin-right: auto;
	}
</style>

<h3>Nilai Ujian Kursus Bahasa Inggris ABC</h3>

<table class="center" border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Siswa</th>
			<th>Nama Kelas</th>
			<th>Nilai Reading</th>
			<th>Nilai Writing</th>
			<th>Nilai Listening</th>
			<th>Rata-Rata</th>
		</tr>
	</thead>

	<?php
		$sql_view = mysqli_query($conn, 'SELECT id_nilai,nama_siswa,nama_kelas,nilai_reading,nilai_writing,nilai_listening FROM t_nilai,t_siswa,t_kelas WHERE t_nilai.id_siswa=t_siswa.id_siswa AND t_nilai.id_kelas=t_kelas.id_kelas');

		$no = 1;
		while ($result = mysqli_fetch_array($sql_view)){

			$nilai_rata = ($result['nilai_reading']+$result['nilai_writing']+$result['nilai_listening'])/3;
	?>

	<tbody>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $result['nama_siswa']; ?></td>
			<td><?php echo $result['nama_kelas']; ?></td>
			<td><?php echo $result['nilai_reading']; ?></td>
			<td><?php echo $result['nilai_writing']; ?></td>
			<td><?php echo $result['nilai_listening']; ?></td>
			<td><?php echo ceil($nilai_rata); ?></td>
		</tr>
	</tbody>

	<?php
		}
	?>
</table>