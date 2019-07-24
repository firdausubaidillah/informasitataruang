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

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

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
              <li class="active"><a href="#pemohon" data-toggle="tab">Data Pemohon</a></li>
              <li><a href="#berkas" data-toggle="tab">Berkas</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane">
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="pemohon">
              <form method="post" action="<?= base_url("pemohon/tambahdatapemohon"); ?>" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputNama" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Nama" value="<?= $nama; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputJK" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                       <select class="form-control" name="jk">
                          <option value="">--- Pilih jenis Kelamin ---</option> 
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2 control-label">Alamat Lengkap</label>

                    <div class="col-sm-10">
                      <textArea name="alamat" class="form-control" id="inputalamat" placeholder="Alamat Lengkap"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTgl" class="col-sm-2 control-label">Tanggal</label>

                    <div class="col-sm-10">
                      <input type="date" name="tgl" class="form-control" id="inputtanggal" placeholder="Tanggal Pengajuan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPekerjaan" class="col-sm-2 control-label">Pekerjaan</label>

                    <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" id="inputpekerjaan" placeholder="Pekerjaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPemanfaatan" class="col-sm-2 control-label">Pemanfaatan</label>

                    <div class="col-sm-10">
                    <input type="text" name="pemanfaatan" class="form-control" id="inputpemanfaatan" placeholder="Pemanfaatan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputLokasi" class="col-sm-2 control-label">Lokasi yang diajukan</label>

                    <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control" id="inputlokasi" placeholder="Alamat Lokasi yang diajukan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputHp" class="col-sm-2 control-label">No. Telpon/HP</label>

                    <div class="col-sm-10">
                    <input type="text" name="notelp" class="form-control" id="inputnotelpon" placeholder="No. Telpon/HP" value="<?= $notelp; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="berkas">
              <form method="post" action="<?= base_url("pemohon/tambahdatapemohon"); ?>" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputNoreg" class="col-sm-2 control-label">No. Reg</label>
                    
                    <div class="col-sm-10">
                    <input type="text" name="noreg" class="form-control" id="noreg" value="<?= $r->noreg; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNama" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Nama" value="<?= $nama; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputJK" class="col-sm-2 control-label">KTP</label>

                    <div class="col-sm-10">
                       <select class="form-control" name="jk">
                          <option value="">--- Pilih jenis Kelamin ---</option> 
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2 control-label">Alamat Lengkap</label>

                    <div class="col-sm-10">
                      <textArea name="alamat" class="form-control" id="inputalamat" placeholder="Alamat Lengkap"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTgl" class="col-sm-2 control-label">Tanggal</label>

                    <div class="col-sm-10">
                      <input type="date" name="tgl" class="form-control" id="inputtanggal" placeholder="Tanggal Pengajuan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPekerjaan" class="col-sm-2 control-label">Pekerjaan</label>

                    <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" id="inputpekerjaan" placeholder="Pekerjaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPemanfaatan" class="col-sm-2 control-label">Pemanfaatan</label>

                    <div class="col-sm-10">
                    <input type="text" name="pemanfaatan" class="form-control" id="inputpemanfaatan" placeholder="Pemanfaatan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputLokasi" class="col-sm-2 control-label">Lokasi yang diajukan</label>

                    <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control" id="inputlokasi" placeholder="Alamat Lokasi yang diajukan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputHp" class="col-sm-2 control-label">No. Telpon/HP</label>

                    <div class="col-sm-10">
                    <input type="text" name="notelp" class="form-control" id="inputnotelpon" placeholder="No. Telpon/HP" value="<?= $notelp; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
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
