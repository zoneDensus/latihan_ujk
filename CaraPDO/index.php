<?php
include 'database.php';
$database = new Database();

    if (isset($_POST['daftar'])) 
    {
        // var_dump($_POST);           
        $nama = htmlspecialchars($_POST['nama']);
        $nrp = htmlspecialchars($_POST['nrp']);
        $email = htmlspecialchars($_POST['email']);
        $jurusan = htmlspecialchars($_POST['jurusan']);
        $gambar = '';

        $database->query("INSERT INTO mahasiswa VALUES ('','$nama', '$nrp', '$email', '$jurusan', '$gambar') ");
        $status = $database->execute();
        if ($status == true) 
        {
            $_SESSION['status'] = 1;
            $_SESSION['pesan'] = 'Berhasil Masuk';
        }else{
            $_SESSION['status'] = 0;
            $_SESSION['pesan'] = 'Gagal Masukan Data';
        }
    }


    if (isset($_GET['delete'])) 
    {
        $id_data = $_GET['delete'];
        $database->query("DELETE FROM mahasiswa WHERE id=$id_data");
        $status = $database->execute();
        if ($status == true) 
        {
            $_SESSION['status'] = 1;
            $_SESSION['pesan'] = 'Delete';
        }else{
            $_SESSION['status'] = 0;
            $_SESSION['pesan'] = 'Gagal Delete';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Insert Data Mahasiswa</title>

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">

        <?php if(isset($_SESSION['status'])) : ?>
            <?php if ($_SESSION['status'] == 1) : ?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['pesan'] ?>
                </div>
            <?php else: ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['pesan'] ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <!-- Form input -->
        <div class="card shadow p-3">
            <form action="" method="POST">
                <h3 class="card-title">Input Mahasiswa</h3>
                <label for="nm">Nama</label>
                <input type="text" class="form-control" name="nama" id="nm">
                <label for="nr">NRP</label>
                <input type="number" class="form-control" name="nrp" id="nr">
                <label for="em">Email</label>
                <input type="email" class="form-control" name="email" id="em">
                <label for="jr">Jurusan</label>
                <select name="jurusan" id="jr" class="form-control">
                    <option>Pilih Jurusan</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Kimia">Kimia</option>
                    <option value="Industri">Teknik Industri</option>
                    <option value="Elektro">Elektro</option>
                </select>
                <div class="mt-2">
                    <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>


        <!-- Table -->
        <div class="shadow p-2 mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $database->query('SELECT * FROM mahasiswa ORDER BY id DESC');
                    $database->execute();
                    $barisData = $database->checkRow();

                    $dataMahasiswa = $database->allData();

                    if ($barisData > 0) :
                        foreach ($dataMahasiswa as $x) :
                    ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?= $x['nama'] ?></td>
                                <td><?= $x['nrp'] ?></td>
                                <td><?= $x['email'] ?></td>
                                <td><?= $x['jurusan'] ?></td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <a href="?delete=<?= $x['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                    <?php
                        endforeach;
                    else:
                        echo "Tidak ada Data";
                    endif;
                    ?>

                </tbody>

            </table>
        </div>
    </div>

</body>

</html>