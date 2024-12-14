<?php
$proses = $_GET['proses'];
include "../koneksi.php";

session_start();

// include "../library/liblogin.php";
// if (ceklogin()) {
//     header("location:login.php");



if ($proses == 'insert') {
    $namaadmin  = $_POST['namaadmin'];
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);
    $alamat     = $_POST['alamat'];
    $level      = $_POST['level'];
    $foto       = $_FILES['foto']['name'];
    $file_tmp   = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp, '../foto/fotouser/' . $foto);

    mysqli_query($koneksi, "INSERT INTO admin SET namaadmin='$namaadmin', username='$username', alamat='$alamat', password='$password', level='$level', foto='$foto' ");
} elseif ($proses == 'update') {
    $namaadmin  = $_POST['namaadmin'];
    $username   = $_POST['username'];
    $level      = $_POST['level'];
    $id         = $_POST['idadmin'];
    $foto       = $_FILES['foto']['name'];
    $file_tmp   = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp, '../foto/fotouser' . $foto);

    $queryShow  = "SELECT*FROM admin WHERE idadmin='$id'; ";
    $sqlShow    = mysqli_query($koneksi, $queryShow);
    $result     = mysqli_fetch_assoc($sqlShow);
    if ($_FILES['foto']['name'] == "") {
        $fotoShow = $_FILES['foto']['name'];
        unlink("foto/" . $result['foto']);
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/' . $_FILES['foto']['name']);
    };

    mysqli_query($koneksi, "UPDATE admin SET namaadmin='$namaadmin', username='$username', level='$level', foto='$fotoshow' WHERE idadmin='$id' ");
} elseif ($proses == 'hapus') {
    $id = $_GET['idadmin'];
    mysqli_query($koneksi, "DELETE FROM admin WHERE idadmin='$id' ");
}

header("location:../index.php?halaman=admin");
// } else {
//     header("location: ../login.php");
// }
