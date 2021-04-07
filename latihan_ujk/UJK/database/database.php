<?php 
    
    // file ini untuk menghubungkan ke database

    // Config Database
    $dbhost = 'localhost'; // server kita pakai server local
    $dbuser = 'root'; // phpmyadmin kita pakai user root
    $dbpass = ''; // kalo di windows password kosong, kalo di MacOS passwordnya "root"
    $dbname = 'phpdasar'; // nama database yang dibuat

    $conn = ''; //variable yang digunakan untuk koneksi

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($conn->connect_errno) 
    {
        echo "Database Gagal Terhubung". $conn->connect_errno;
    }



    // BTW didalam database phpdasar ada table bernama " mahasiswa ";
?>