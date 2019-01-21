<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Faza") ?></h1>
</body>
</html>