<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$siswa = query("SELECT * FROM siswa");

$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/custom/temp/dir/path']);
$html = '<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa</title>
	<link rel="stylesheet" href="css/print.css">
</head>
<body>

	<h1>Daftar Siswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Gambar</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>';

	$i = 1;
	foreach( $siswa as $row ) {
		$html .= '<tr>
			<td>'. $i++ .'</td>
			<td><img src="img/'. $row["gambar"] .'" width="50"></td>
			<td>'. $row["nis"] .'</td>
			<td>'. $row["nama"] .'</td>
			<td>'. $row["email"] .'</td>
			<td>'. $row["jurusan"] .'</td>
		</tr>';
	}

$html .= '</table>

</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-siswa.pdf', 'I');

?>
