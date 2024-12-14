<?php
include "koneksi.php";
$id = $_GET['idadmin'];
$sql = mysqli_query($koneksi, "SELECT*FROM admin WHERE idadmin='$id' ");
$data = mysqli_fetch_array($sql);
?>



<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
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

    <div class="card-body">
      <!-- Start creating your amazing application! <br><br><br> -->


      <!-- general form elements -->
      <div class="card  text-xs">
        <!-- <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div> -->
        <!-- /.card-header -->
        <!-- form start -->
        <form action="db/dbadmin.php?proses=update" method="POST" enctype="multipart/form-data">
          <input type="hidden" value="<?= $data['idadmin'] ?>" name="idadmin" id="idadmin">

          <div class="card-body-sm ml-2">
            <div class="form-group">
              <label for="namaadmin">nama Lengkap</label>
              <input type="text" class="form-control" id="namaadmin" name="namaadmin" value="<?= $data['namaadmin'] ?>" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>" required>
            </div>

            <div class="form-group mt-3">
              <label>Pilih Level</label>
              <select multiple class="form-control" id="level" name="level" value="<?= $data['level'] ?>" required>
                <option value="admin" <?php if ($data['level'] == 'admin') echo "selected"; ?>>admin</option>
                <option value="user" <?php if ($data['level'] == 'user') echo "selected"; ?>>user</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputfile1">Upload Foto</label>
            <input type="file" name="foto" id="exampleInputFile" class="form-control" placeholder="foto" value="<?= $data['foto'] ?>">
          </div>
          <!-- /.card-body -->

          <div class="card-footer float-right">
            <div class="col-sm-12">
              <img src="foto/<?= $data['foto']; ?>" width="100px" class="rounded float-right">
            </div>
            <button type="reset" class="btn-sm btn-warning"><i class="fa fa-retweet"></i> Reset</button>
            <button type="submit" class="btn-sm btn-primary"><i class="fa fa-save"></i> Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->


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