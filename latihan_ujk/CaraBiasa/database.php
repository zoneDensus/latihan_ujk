<?php 

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'phpdasar';
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($conn->connect_errno) 
    {
        echo "database Error atau Database tidak ditemukan, silahkan cek Kembali";
    }


?>