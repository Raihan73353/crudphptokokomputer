<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card text-xs">
    <div class="card-header bg-primary">
      <h2 class="card-title">Tambah barang</h2>

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
        <form action="db/dbbarang.php?proses=insert" method="POST" enctype="multipart/form-data">
          <div class="card-body-sm ml-2">
            <div class="form-group">
              <label for="namabarang">nama Barang</label>
              <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Masukkan namabarang" required>
            </div>

            <!-- koneksi untuk input references -->
            <?php
            include("koneksi.php");
            $sqlsuplier = mysqli_query($koneksi, "SELECT * FROM suplier");
            $sqlkategori = mysqli_query($koneksi, "SELECT * FROM kategori");
            $sqlmerk = mysqli_query($koneksi, "SELECT * FROM merk");

            //form suplier
            echo "
                    <div class='form-group'>
                    <label>Select suplier</label>
                    <select class='form-control' name='idsuplier'>
                    <option value='' disabled selected>Select a suplier</option>";

            while ($datasuplier = mysqli_fetch_array($sqlsuplier)) {
              echo "<option value='{$datasuplier['idsuplier']}'>{$datasuplier['namasuplier']}</option>";
            }

            echo "
                        </select>
                    </div>";

            //form suplier
            echo "
                    <div class='form-group'>
                    <label>Select kategori</label>
                    <select class='form-control' name='idkategori'>
                    <option value='' disabled selected>Select a kategori</option>";

            while ($datakategori = mysqli_fetch_array($sqlkategori)) {
              echo "<option value='{$datakategori['idkategori']}'>{$datakategori['namakategori']}</option>";
            }

            echo "
                        </select>
                    </div>";

            //form merk
            echo "
                    <div class='form-group'>
                    <label>Select merk</label>
                    <select class='form-control' name='idmerk'>
                    <option value='' disabled selected>Select a merk</option>";

            while ($datamerk = mysqli_fetch_array($sqlmerk)) {
              echo "<option value='{$datamerk['idmerk']}'>{$datamerk['namamerk']}</option>";
            }

            echo "
                        </select>
                    </div>";
            ?>


            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga" required>
            </div>
            <div class="form-group">
              <label for="stok">stok</label>
              <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan stok" required>
            </div>
            <div class="form-group">
              <label for="exampleInputfile1">Upload Foto</label>
              <input type="file" name="foto" id="exampleInputFile" class="form-control" placeholder="foto">
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i> Simpan</button>
              <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i> Reset</button>
            </div>
        </form>
      </div>


      <!-- /.card-body -->


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