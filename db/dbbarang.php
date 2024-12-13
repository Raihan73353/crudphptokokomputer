<?php
$proses = $_GET['proses'];
include "../koneksi.php";

session_start();

// include "../library/liblogin.php";
// if (ceklogin()) {
//     header("location:login.php");



if ($proses == 'insert') {
    $namabarang     = $_POST['namabarang'];
    $namasuplier    = $_POST['namasuplier'];
    $namakategori   = $_POST['namakategori'];
    $namamerk       = $_POST['namamerk'];
    $harga          = $_POST['harga'];
    $stok           = $_POST['stok'];
    $foto           = $_FILES['foto']['name'];
    $file_tmp       = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp, '../foto/fotobarang/' . $foto);

    mysqli_query($koneksi, "INSERT INTO barang SET namabarang='$namabarang', harga='$harga', stok ='$stok', foto ='$foto' ");
    mysqli_query($koneksi, "INSERT INTO suplier SET namasuplier='$namasuplier'"); 
    mysqli_query($koneksi, "INSERT INTO kategori SET namakategori='$namakategori'"); 
    mysqli_query($koneksi, "INSERT INTO merk SET namamerk='$namamerk'"); 
 

} elseif ($proses == 'update') {
    $namabarang  = $_POST['namabarang'];
    $namasuplier   = $_POST['namasuplier'];
    $namakategori   = $_POST['namakategori'];
    $namamerk   = $_POST['namamerk'];
    
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

    mysqli_query($koneksi, "UPDATE barang SET namabarang='$namabarang', namasuplier='$namasuplier', namakategori='$namakategori', namamerk='$namamerk', stok='$stok', foto='$fotoshow' WHERE idbarang='$id' ");
} elseif ($proses == 'hapus') {
    $id = $_GET['idbarang'];
    mysqli_query($koneksi, "DELETE FROM barang WHERE idbarang='$id' ");
}

header("location:../index.php?halaman=barang");
// } else {
//     header("location: ../login.php");
// }
