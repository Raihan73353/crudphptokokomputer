<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card text-xs">
    <div class="card-header bg-primary">
      <h2 class="card-title">Tambah admin</h2>

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
        <form action="db/dbadmin.php?proses=insert" method="POST" enctype="multipart/form-data">
          <div class="card-body-sm ml-2">
            <div class="form-group">
              <label for="namaadmin">namaadmin Lengkap</label>
              <input type="text" class="form-control" id="namaadmin" name="namaadmin" placeholder="Masukkan namaadmin" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              <!-- An element to toggle between password visibility -->
            </div>

            <input type="checkbox" onclick="myFunction()"> Tampilkan Password

            <script>
              function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }
            </script>

            <div class="form-group">
              <label for="alamat">alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
            </div>

            <div class="form-group mt-3">
              <label>Pilih Level</label>
              <select multiple class="form-control" id="level" name="level" required>
                <option value="admin">admin</option>
                <option value="user">user</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputfile1">Upload Foto</label>
              <input type="file" name="foto" id="exampleInputFile" class="form-control" placeholder="foto">
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