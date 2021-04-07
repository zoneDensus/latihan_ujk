<?php 
    include 'database/database.php'; // menghubungkan file ini dengan file database.php
    include 'ProsesCRUD/prosesDatabase.php'; // menghubungkan file ini dengan prosesDatabase agar bisa menggunakan function yang ada di prosesDatabase.php

    // mengambil function semuaMahasiswa() yang ada di file prosesDatabase.php. lokasi file di folder ProsesCRUD
    $sql = "SELECT * FROM mahasiswa ORDER BY id DESC "; // mengurutkan dari id yang terbesar ke kecil

    $dataMahasiswa = semuaMahasiswa($sql); // mengambil nilai function semuaMahasiswa yang dimana berdasarkan 'sql'




    // Proses Input Mahasiswa

    // Jika tombol input mahasiswa di set. maka jalankan programnya. cek bagian button form input, terdapat attribute name="inputMahasiswa"
    if (isset($_POST['inputMahasiswa'])) 
    {
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <!-- Form Input data -->
        <form action="" method="post">

            <!-- Cek Kembali name, jangan lupa, attribute name penting saat proses input -->
            <label for="nm">Nama</label>
            <input type="text" name="nama" class="form-control" id="nm">

            <label for="ni">NIM</label>
            <input type="text" name="nim" class="form-control" id="ni">

            <label for="em">Email</label>
            <input type="text" name="email" class="form-control" id="em">

            <label for="al">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="al">
            <br>

            <!-- Jangan lupa type buttonnya untuk menjalankan aksi formnya bertipe = "submit" -->
            <button type="submit" class="btn btn-primary" name="inputMahasiswa">Input Mahasiswa</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-">No</th>
                    <th scope="col-">Nama</th>
                    <th scope="col-">nrp</th>
                    <th scope="col-">Email</th>
                    <th scope="col-">jurusan</th>
                </tr>
            </thead>
            <tbody>
                <!-- dataMahasiswa memiliki data array, harus menggunakan foreach untuk menampilkan semua data arraynya -->
                <?php 
                $no = 1; // buat nomor urut
                foreach($dataMahasiswa as $data) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nrp'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['jurusan'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>

</html>