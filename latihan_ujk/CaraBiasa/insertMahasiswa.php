<?php 
 include 'database.php';
 session_start();

 if (isset($_GET['insert'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $nrp = htmlspecialchars($_POST['nrp']);
    $email = htmlspecialchars($_POST['email']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $gambar = '';
   
    $sql = "INSERT INTO mahasiswa VALUES('', '$nama', '$nrp', '$email', '$jurusan', '$gambar') ";
   
    $insertData = $conn->query($sql);
    if ($insertData == true) {
        $_SESSION['status'] =1;
        $_SESSION['pesan'] = 'Data berhasil di simpan';
        header('location:index.php');
    }else{
        $_SESSION['status'] = 0;
        $_SESSION['pesan'] = 'Data Gagal Di Simpan';
        header('location:index.php');
    }
 }




 if (isset($_GET['delete'])) 
 {
    $id_mahasiswa = $_GET['delete'];
    $dataDelete = $conn->query("DELETE FROM mahasiswa WHERE id = $id_mahasiswa ");
    if ($dataDelete == true) {
        $_SESSION['status'] =1;
        $_SESSION['pesan'] = 'Berhasil di delete';
        header('location:index.php');
    }else{
        $_SESSION['status'] = 0;
        $_SESSION['pesan'] = 'Data Gagal di delete';
        header('location:index.php');
    }
 }
