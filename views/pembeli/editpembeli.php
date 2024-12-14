<?php
include "koneksi.php";
$id = $_GET['idpembeli'];
$sql = mysqli_query($koneksi, "SELECT*FROM pembeli WHERE idpembeli='$id' ");
$data = mysqli_fetch_array($sql);
?>



<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
  <div class="card-header bg-gradient-danger mb-3">
      <div class="row">
        <div class="col tekstebal">
          <strong>
            <h5 style="font-family:Arial, Helvetica, sans-serif;">Halaman Tampil pembeli</h5> 
          </strong>
        </div>
        <div class="col">
          <a href="index.php?halaman=tambahpembeli" class="btn btn-light float-right btn-sm"><i class="fas fa-user-plus"></i> Tambah pembeli</a>
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
        <form action="db/dbpembeli.php?proses=update" method="POST">
          <input type="hidden" value="<?= $data['idpembeli'] ?>" name="idpembeli" id="idpembeli">
          
          <div class="card-body-sm ml-2">
            <div class="form-group">
              <label for="namapembeli">nama Lengkap</label>
              <input type="text" class="form-control" id="namapembeli" name="namapembeli" value="<?= $data['namapembeli'] ?>" required>
            </div>
            <div class="form-group">
              <label for="alamat">alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat'] ?>" required>
            </div>            
          </div>
          <!-- /.card-body -->

          <div class="card-footer float-right">
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