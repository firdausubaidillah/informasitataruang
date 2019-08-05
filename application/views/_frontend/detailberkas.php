<?php
    $id       = $this->session->userdata('id');
    $nama     = $this->session->userdata('nama');
    $ktp      = $this->session->userdata('ktp');
    $notelp   = $this->session->userdata('notelp');
    $level    = $this->session->userdata('level');
?>

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
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">

  <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url("assets/backend/"); ?>dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $nama; ?></h3>

              <p class="text-muted text-center">Pemohon</p>

              <a href="<?= base_url('login/edit_pemohon');?>" class="btn btn-success btn-block"><b>Profile</b></a>
              <a href="<?= base_url('login/logout_pemohon');?>" class="btn btn-danger btn-block"><b>Logout</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#detailberkas" data-toggle="tab">Berkas Pemohon</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane">
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <?php
              foreach($berkasdetail as $p){
              ?>
              <div class="active tab-pane" id="detailberkas">
              <form method="post" action="<?= base_url("pemohon/tambahdatapemohon"); ?>" enctype="multipart/form-data" class="form-horizontal">
              
                  <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">KTP</label>

                    <div class="col-sm-10">
                      <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$p->ktp  ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">KK</label>

                    <div class="col-sm-10">
                      <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$p->kk  ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">BKL</label>

                    <div class="col-sm-10">
                      <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$p->bkl  ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">PBB</label>

                    <div class="col-sm-10">
                      <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$p->pbb  ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">SPPL</label>

                    <div class="col-sm-10">
                      <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$p->sppl  ?>"/>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">SK</label>

                    <div class="col-sm-10">
                      <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$p->sk  ?>"/>
                    </div>
                  </div> -->
                </form>
              </div>
              <?php } ?>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
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
