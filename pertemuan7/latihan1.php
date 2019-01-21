<?php
// $_GET
$siswa = [
	[
			"nama" => "Faza Iman Imron",
			"nis" => "16830",
			"email" => "cincaumyself@gmail,com",
			"jurusan" => "Rekayasa Perangkat Lunak",
			"gambar" => "faza.jpg"
	],
	[
			"nama" => "Armananda maulana",
			"nis" => "16820",
			"email" => "n.armananda@gmail.com",
			"jurusan" => "Multimedia",
			"gambar" => "nando.jpg"
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
	<h1>Daftar Siswa</h1>
	<ul>
	<?php foreach( $siswa as $sw) : ?>
		<li>
			<a href="latihan2.php?nama=<?= $sw["nama"]; ?>&nis=<?= $sw["nis"]; ?>&email=<?= $sw["email"]; ?>&jurusan=<?= $sw["jurusan"]; ?>&gambar=<?= $sw["gambar"]; ?>"><?= $sw["nama"]; ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
</body>
</html>