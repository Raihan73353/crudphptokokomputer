<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login SIM Lib</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-image: url('views/aset/background/backgroundlogin3.jpg'); background-size: cover;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-success" style="background:transparent; border: 2px solid rgba(270, 270, 270, .5); border-radius: 20px;">
            <div class="card-header text-center">
                <h3>
                    <img src="views/aset/logo/smkn1kb.png" style="width: 60px;">
                    <br>
                    Aplikasi <span style="color:red;"> POS</span>
                </h3>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Login Untuk Menggunakan Aplikasi Penjualan Ini</p>
                <?php
                if (isset($_GET['pesan']) == 'Gagal') {
                    echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Failed!</h5>
                        Username atau Password anda salah!!!
                      </div>';
                }
                ?>
                <form action="db/dblogin.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <input type="checkbox" onclick="myFunction()" > Tampilkan Password

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

                    <div class="row mt-3">

                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>