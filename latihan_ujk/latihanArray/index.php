<?php 
    include 'function/proses.php'; // menggabung file proses.php yang ada di folder function
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEst Array Multidemensional</title>

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-">No</th>
                    <th scope="col-">Nama</th>
                    <th scope="col-">NIM</th>
                    <th scope="col-">Email</th>
                    <th scope="col-">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <!-- menampilkan isi data array demensional, $dataMahasiswa merupakan variable yang menyimpan dataArray -->
                <?php
                $no = 1; // untuk pengurutan
                foreach ($dataMahasiswa as $key => $data) : ?>
                    <tr>
                        <td><?php echo $no++;  ?></td>
                        <td><?= $data['Nama']; ?></td>
                        <td><?= $data['NIM']; ?></td>
                        <td><?= $data['Email']; ?></td>
                        <td><?= $data['Alamat']; ?></td>
                    </tr>
                <?php endforeach  ?>
            </tbody>
        </table>
        <br>

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
    </div>

</body>

</html>