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
    
    // Karena dibagian index.php yang dikirim data berupa variable $_POST saja, maka dibagian ini $_POST diganti jadi $data
    // nama, nim, email, alamat merupakan attribute 'name' yang ada di tag <input>
    $nama = $data['nama'];
    $nim = $data['nim'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];

    global $conn; // seperti diatas fungsinya untuk mengambil informasi database

    // karena table mahasiswa ada ada 6 column, tapi gw hanya gunain 4 column, column pertama merupakan primary Key
    // jadi tidak usah di input, kosongkan saja, column terakhir gambar, tapi disini tidak menggunakan gambar
    $sql = "INSERT INTO mahasiswa VALUES ('','$nama', '$nim', '$email', '$jurusan' , '')";


    // Sekarang proses memasukan data ke table mahasiswa yang ada di database phpdasar
    $insertData = $conn->query($sql);
    return $insertData;
}
