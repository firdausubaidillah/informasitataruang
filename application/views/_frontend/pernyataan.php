<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Informasi Tata Ruang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url("assets/backend/"); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/backend/"); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url("assets/backend/"); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/backend/"); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url("assets/backend/"); ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand">Sistem Informasi Tata Ruang Kota Pasuruan</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
      </div>
      <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?= base_url("assets/backend/"); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?= base_url("assets/backend/"); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">SURAT PERNYATAAN PENUNJUKAN LOKASI INFORMASI TATA RUANG</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url("pemohon/tambahdatapernyataan"); ?>" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
              <div class="form-group">
                  <label for="inputid" class="col-sm-2 control-label" style:text-align="left";>No. Reg</label>
                  <div class="col-sm-10">
                    <input type="text" name="noreg" class="form-control" id="noreg" value="<?= $kodeunik; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputnama" class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Jenis Kelamin
                        </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jk">
                                <option value="">--- Pilih jenis Kelamin ---</option> 
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <span class="help-block"></span>
                    </div>
                <div class="form-group">
                  <label for="inputalamat" class="col-sm-2 control-label">Alamat Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="inputalamat"  placeholder="Alamat Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputpekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" id="inputpekerjaan" placeholder="Pekerjaan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputktp" class="col-sm-2 control-label">No KTP</label>
                  <div class="col-sm-10">
                    <input type="text" name="ktp" class="form-control" id="inputktp" placeholder="No KTP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputnotelp" class="col-sm-2 control-label">No Telpon</label>
                  <div class="col-sm-10">
                    <input type="text" name="notelp" class="form-control" id="inputnotelp" placeholder="No Telpon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputlokasi" class="col-sm-2 control-label">Lokasi yang diajukan</label>
                  <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control" id="inputlokasi" placeholder="Alamat Lokasi yang diajukan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtgl" class="col-sm-2 control-label">Tanggal Pengajuan</label>
                  <div class="col-sm-10">
                    <input type="date" name="tgl" class="form-control" id="inputtgl" placeholder="Tanggal">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="batal" class="btn btn-default">Batal</button>
                <button type="submit" name="submit"class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2019 <a href="https://tataruangkotapasuruan.com">Tata Ruang Kota Pasuruan</a></strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url("assets/backend/"); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url("assets/backend/"); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url("assets/backend/"); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url("assets/backend/"); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/backend/"); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url("assets/backend/"); ?>dist/js/demo.js"></script>
</body>
</html>