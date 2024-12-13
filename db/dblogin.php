<?php
session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);

//cari di tabel pegawai username dan password yang sesuai dengan yang diinput

include "../koneksi.php";

$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'AND password='$password' ");
$jumlahadmin = mysqli_num_rows($sql);
$data = mysqli_fetch_array($sql);

if ($jumlahadmin > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['namaadmin'] = $data['namaadmin'];
    $_SESSION['idadmin'] = $data['idadmin'];
    $_SESSION['level'] = $data['level'];

    $_SESSION['statuslogin'] = true;
    $_SESSION['waktu'] = time();
    header('location:../index.php');
} else {
    header("location:../login.php?pesan=Gagal");
}
