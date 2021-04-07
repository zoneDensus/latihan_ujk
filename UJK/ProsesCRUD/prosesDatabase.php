<?php
include 'database/database.php';


// File ini berisikan Procedural dan Funcition

function semuaMahasiswa($query)
{
    //karena $conn yang ada di file database.php berada diluar function semuaMahasiswa. jadi buat variable global untuk memanggilnya
    // agar variable $conn dapat digunakan
    global $conn;

    // array kosong untuk menyimpan dataMahasiswa

    $dataMahasiswa = $conn->query($query);
    return $dataMahasiswa; // untuk membuat function ini bernilai data 'dataMahasiswa'
}


function inputMahasiswa($data)
{
    
}
