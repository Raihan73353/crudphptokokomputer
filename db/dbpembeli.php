<?php
$proses = $_GET['proses'];
include "../koneksi.php";

session_start();

// include "../library/liblogin.php";
// if (ceklogin()) {
//     header("location:login.php");



    if ($proses == 'insert') {
        $namapembeli = $_POST['namapembeli'];        
        $alamat = $_POST['alamat'];
        
        mysqli_query($koneksi, "INSERT INTO pembeli SET namapembeli='$namapembeli', alamat='$alamat'");
    } 
    elseif ($proses == 'update') {
        $namapembeli = $_POST['namapembeli'];    
        $alamat = $_POST['alamat'];
        $id = $_POST['idpembeli'];

        mysqli_query($koneksi, "UPDATE pembeli SET namapembeli='$namapembeli', alamat='$alamat' WHERE idpembeli='$id' ");
    } elseif ($proses == 'hapus') {
        $id = $_GET['idpembeli'];
        mysqli_query($koneksi, "DELETE FROM pembeli WHERE idpembeli='$id' ");
    }

    header("location:../index.php?halaman=pembeli");
// } else {
//     header("location: ../login.php");
// }
