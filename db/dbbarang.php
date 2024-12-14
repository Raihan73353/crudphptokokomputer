<?php
$proses = $_GET['proses'];
include "../koneksi.php";

session_start();

// include "../library/liblogin.php";
// if (ceklogin()) {
//     header("location:login.php");



if ($proses == 'insert') {
    
    $namabarang     = $_POST['namabarang'];
    $idsuplier    = $_POST['idsuplier'];
    $idkategori   = $_POST['idkategori'];
    $idmerk       = $_POST['idmerk'];
    $harga          = $_POST['harga'];
    $stok           = $_POST['stok'];
    // $foto           = $_FILES['foto']['name'];
    // $file_tmp       = $_FILES['foto']['tmp_name'];   
    // mysqli_query($koneksi, "INSERT INTO suplier SET id$idsuplier='$idsuplier'"); 
    // mysqli_query($koneksi, "INSERT INTO kategori SET idk$idkategori='$idkategori'"); 
    // mysqli_query($koneksi, "INSERT INTO merk SET idmerk='$idmerk'"); 

    //move_uploaded_file($file_tmp, '../foto/fotobarang/' . $foto);

    mysqli_query($koneksi, "INSERT INTO barang SET idsuplier='$idsuplier',idkategori='$idkategori',idmerk='$idmerk',namabarang='$namabarang', harga='$harga', stok ='$stok'");
 
 

} elseif ($proses == 'update') {
    $namabarang  = $_POST['namabarang'];
    $namasuplier   = $_POST['namasuplier'];
    $idkategori   = $_POST['idk$idkategori'];
    $idmerk   = $_POST['idmerk'];
    
    $id         = $_POST['idbarang'];
    $foto       = $_FILES['foto']['name'];
    $file_tmp   = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp, '../foto/fotobarang' . $foto);

    $queryShow  = "SELECT*FROM barang WHERE idbarang='$id'; ";
    $sqlShow    = mysqli_query($koneksi, $queryShow);
    $result     = mysqli_fetch_assoc($sqlShow);
    if ($_FILES['foto']['name'] == "") {
        $fotoShow = $_FILES['foto']['name'];
        unlink("foto/" . $result['foto']);
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/' . $_FILES['foto']['name']);
    };

    mysqli_query($koneksi, "UPDATE barang SET namabarang='$namabarang', namasuplier='$namasuplier', idk$idkategori='$idkategori', idmerk='$idmerk', stok='$stok', foto='$fotoshow' WHERE idbarang='$id' ");
} elseif ($proses == 'hapus') {
    $id = $_GET['idbarang'];
    mysqli_query($koneksi, "DELETE FROM barang WHERE idbarang='$id' ");
}

header("location:../index.php?halaman=barang");
// } else {
//     header("location: ../login.php");
// }
