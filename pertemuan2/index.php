<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standart Output
// echo, print
// print_r
// var_dump

// echo "Faza Iman Imron";
// print "Faza Iman imron";
// print_r("Faza Iman Imron");
// var_dump("Faza Iman Imron");
// echo true; //(boolean true = 1, bolen false = kosong)

// Penulisan Sintaks PHP
// 1. PHP di di dalam HTML
// 2. HTML di dalam PHP (Tidak Disarankan)

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Faza";
// // Interpolasi
// echo "Halo, nama saya $nama";

// Operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Faza";
// $nama_belakang = "Iman Imron";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Faza";
// $nama .= " ";
// $nama .= "Iman Imron";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 < 5);
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");
// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 && $x % 2 == 0);
// var_dump($x < 20 || $x % 2 == 0);
?>
<!-- PHP di dalam HTML -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
</body>
</html> -->