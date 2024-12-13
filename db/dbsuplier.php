<?php
$proses = $_GET['proses'];
include "../koneksi.php";

session_start();

// include "../library/liblogin.php";
// if (ceklogin()) {
//     header("location:login.php");



    if ($proses == 'insert') {
        $namaadmin = $_POST['namaadmin'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $alamat = $_POST['alamat'];
        $level = $_POST['level'];

        mysqli_query($koneksi, "INSERT INTO admin SET namaadmin='$namaadmin', username='$username', alamat='$alamat', password='$password', level='$level' ");
    } 
    elseif ($proses == 'update') {
        $namaadmin = $_POST['namaadmin'];
        $username = $_POST['username'];
        $level = $_POST['level'];
        $id = $_POST['idadmin'];

        mysqli_query($koneksi, "UPDATE admin SET namaadmin='$namaadmin', username='$username', level='$level' WHERE idadmin='$id' ");
    } elseif ($proses == 'hapus') {
        $id = $_GET['idadmin'];
        mysqli_query($koneksi, "DELETE FROM admin WHERE idadmin='$id' ");
    }

    header("location:../index.php?halaman=admin");
// } else {
//     header("location: ../login.php");
// }
