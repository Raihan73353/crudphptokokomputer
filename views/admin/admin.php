<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card ">
    <div class="card-header bg-gradient-primary mb-3">
      <div class="row">
        <div class="col tekstebal">
          <strong>
            <h5 style="font-family:Arial, Helvetica, sans-serif;">Halaman Tampil admin</h5>
          </strong>
        </div>
        <div class="col">
          <a href="index.php?halaman=tambahadmin" class="btn btn-light float-right btn-sm"><i class="fas fa-user-plus"></i> Tambah admin</a>
        </div>
      </div>
    </div>
    <!-- <div class="card-body">
      <div class="row">
        <div class="col">
          <a href="index.php?halaman=tambahadmin" class="btn btn-primary mb-3 float-right"><i class="fas fa-user-plus"></i> Tambah admin</a>
        </div>
      </div> -->

    <table id="example1" class="table table-bordered table-striped text-sm ml-2">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Username</th>
          <th>Alamat</th>
          <th>Level</th>
          <th>Foto</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "koneksi.php";
        $no = 1;

        $sql = mysqli_query($koneksi, "SELECT * FROM admin");
        while ($data = mysqli_fetch_array($sql)) {
          echo "
            <tr>
            <td>$no</td>
            <td>$data[namaadmin]</td>
            <td>$data[username]</td>
            <td>$data[alamat]</td>
            <td>$data[level]</td>
            <td ><img src='foto/fotouser/$data[foto]' width='40px' class='rounded '></td>
            <td>
            <a href='index.php?halaman=editadmin&idadmin=$data[idadmin]' class='btn btn-sm btn-success' title='update'><i class='fa fa-pencil-alt'></i></a>
            <a href='db/dbadmin.php?proses=hapus&idadmin=$data[idadmin]' class='btn btn-sm btn-danger' title='hapus'><i class='fa fa-trash'></i></a>
          </td>
          </tr> ";
          // var_dump($data['foto']);
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