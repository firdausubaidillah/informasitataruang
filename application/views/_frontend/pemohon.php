<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
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
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
      <section class="content">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">FORMULIR PERMOHONAN INFORMASI PEMANFAATAN RUANG ( IPR )</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
              
            
                <div class="form-group">
                  <label for="inputnoreg" class="col-sm-2 control-label">No Reg</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputnoreg" placeholder="No Reg">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputnama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="Nama" class="form-control" id="inputnama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputjeniskelamin" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputjeniskelamin" placeholder="Jenis Kelamin">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputalamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputalamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtanggal" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputtanggal" placeholder="Tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputpekerjaan" class="col-sm-2 control-label">Pekerjaan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputpekerjaan" placeholder="Pekerjaan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputpemanfaatan" class="col-sm-2 control-label">Pemanfaatan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputpemanfaatan" placeholder="Pemanfaatan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputlokasi" class="col-sm-2 control-label">Lokasi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputlokasi" placeholder="Lokasi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputnotelpon" class="col-sm-2 control-label">No. Telpon/HP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputnotelpon" placeholder="No. Telpon/HP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputberkas" class="col-sm-2 control-label">Unggah Berkas</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputberkas" placeholder="Unggah Berkas">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
         
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
