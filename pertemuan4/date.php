<?php
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestap / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()+60*60*24*100);

    // mktime
    // membuat sendiri detik yang sudah berlalu
    // mktime(0,0,0,0,0,0);
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,10,27,2001));

    // strtotime
    echo date("l", strtotime("27 oct 2001"));
?>