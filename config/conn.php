<?php
	$conn	=	mysqli_connect('localhost','root','') or die ('Koneksi Tidak Ada!');
				mysqli_select_db($conn, 'kursus') or die ('Database Tidak Ada!');
?>