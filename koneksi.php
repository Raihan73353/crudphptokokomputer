<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "tokokomputerahmadi";
$koneksi = mysqli_connect($server, $user, $pass, $db);

if (mysqli_connect_error()) {
    echo "Koneksi gagal;" . mysqli_connect_error();
} 
// else {
//     echo "koneksi berhasil";
// }
