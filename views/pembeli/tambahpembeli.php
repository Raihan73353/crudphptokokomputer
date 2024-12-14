<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card text-xs">
    <div class="card-header bg-danger">
      <h2 class="card-title">Tambah pembeli</h2>

      <!-- <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div> -->
    </div>
    <div class="card-body">
      <!-- Start creating your amazing application! <br><br><br> -->


      <!-- general form elements -->
      <div class="card card-warning">
        <!-- <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div> -->
        <!-- /.card-header -->
        <!-- form start -->
        <form action="db/dbpembeli.php?proses=insert" method="POST">
          <div class="card-body-sm ml-2">
            <div class="form-group">
              <label for="namapembeli">namapembeli Lengkap</label>
              <input type="text" class="form-control" id="namapembeli" name="namapembeli" placeholder="Masukkan namapembeli" required>
            </div>
            <div class="form-group">
              <label for="alamat">alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer-sm float-right">
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