<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card ">
    <div class="card-header bg-gradient-primary mb-3">
      <div class="row">
        <div class="col tekstebal">
          <strong>
            <h5 style="font-family:Arial, Helvetica, sans-serif;">Halaman Tampil barang</h5>
          </strong>
        </div>
        <div class="col">
          <a href="index.php?halaman=tambahbarang" class="btn btn-light float-right btn-sm"><i class="fas fa-user-plus"></i> Tambah barang</a>
        </div>
      </div>
    </div>
    <!-- <div class="card-body">
      <div class="row">
        <div class="col">
          <a href="index.php?halaman=tambahbarang" class="btn btn-primary mb-3 float-right"><i class="fas fa-user-plus"></i> Tambah barang</a>
        </div>
      </div> -->

    <table id="example1" class="table table-bordered table-striped text-sm ml-2">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Suplier</th>
          <th>Kategori</th>
          <th>Merk</th>
          <th>Harga</th>
          <th>Stok</th>
          <!-- <th>Foto</th> -->
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "koneksi.php";
        $no = 1;

        $sqlbarang = mysqli_query($koneksi, "SELECT * FROM barang");
        while (
          $databarang = mysqli_fetch_array($sqlbarang
          )) {
          //kategori
          $idkategori = $databarang['idkategori'];
          $sqlkategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE idkategori='$idkategori' ");
          $datakategori = mysqli_fetch_array($sqlkategori);

          //suplier
          $idsuplier = $databarang['idsuplier'];
          $sqlsuplier = mysqli_query($koneksi, "SELECT * FROM suplier WHERE idsuplier='$idsuplier' ");
          $datasuplier = mysqli_fetch_array($sqlsuplier);

          //merk
          $idmerk = $databarang['idmerk'];
          $sqlmerk = mysqli_query($koneksi, "SELECT * FROM merk WHERE idmerk='$idmerk' ");
          $datamerk = mysqli_fetch_array($sqlmerk);

          //menampilkan data di kolom    
          //fotonya tidak di data di database
          //<td ><img src='foto/fotobarang/$databarang[foto]' width='40px' class='rounded '></td>
          echo "
            <tr>
            <td>$no</td>
            <td>$databarang[namabarang]</td>
            <td>$datasuplier[namasuplier]</td>
            <td>$datakategori[namakategori]</td>
            <td>$datamerk[namamerk]</td>
            <td>$databarang[harga]</td>
            <td>$databarang[stok]</td>
        
            <td>
            <a href='index.php?halaman=editbarang&idbarang=$databarang[idbarang]' class='btn btn-sm btn-success' title='update'><i class='fa fa-pencil-alt'></i></a>
            <a href='db/dbbarang.php?proses=hapus&idbarang=$databarang[idbarang]' class='btn btn-sm btn-danger' title='hapus'><i class='fa fa-trash'></i></a>
          </td>
          </tr> ";
          // var_dump($databarang['foto']);
          $no++;
        }

        ?>


    </table>

  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->