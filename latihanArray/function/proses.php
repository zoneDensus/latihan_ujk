<?php 

    // Ini Contoh website data mahasiswa. bisa diganti menjadi data lain. contohnya data berita bola
    // Nama merupakan variable, sedangkan sena merupakan isi variable
    $dataMahasiswa = [
        [
            "Nama" => "Sena",
            "NIM" => "13533253",
            "Email" => "sena@gmail.com",
            "Alamat" => "Bogor Raya"
        ],
        [
            "Nama" => "Sico",
            "NIM" => "13531543",
            "Email" => "Sico@gmail.com",
            "Alamat" => "Pondok Kelapa"
        ],
        [
            "Nama" => "Fira",
            "NIM" => "13535563",
            "Email" => "fira.alfira@gmail.com",
            "Alamat" => "Kali Mati"
        ],
        [
            "Nama" => "irman",
            "NIM" => "133455253",
            "Email" => "irman.rachman@gmail.com",
            "Alamat" => "Pondok Sawit"
        ]
    ];
    
    // ------------------- Insert Data --------------------------------

    // Ketika tombol input mahasiswa di submit, menjalankan prosesnya
    if (isset($_POST['inputMahasiswa'])) 
    {
        // nama, nim, email merupakan attribute name pada tag <input>. isi datanya di simpan pada variable baru $NAMA, $NIM, $EMAIL
       $NAMA =  $_POST['nama'];
       $NIM = $_POST['nim'];
       $EMAIL =  $_POST['email'];
       $ALAMAT = $_POST['alamat'];

        //Menggunakan function inserData
       insertData($NAMA, $NIM, $EMAIL, $ALAMAT);
    }

    //function insertData. menambah 1 data array dari $dataMahasiswa
    function insertData($nama , $nim, $email, $alamat){
        // karena tidak menggunakan class(OOP), maka $dataMahasiswa yang diluar dalam function di-anggap sebuah variable global
        global $dataMahasiswa;
        array_push($dataMahasiswa, ["Nama" => "$nama","NIM" => "$nim","Email" => "$email","Alamat" => "$alamat"]);
    }

    //  ------------------- Penutup Insert Data ----------------------------


?>