<?php
    $id       = $this->session->userdata('id');
    $nama     = $this->session->userdata('nama');
    $ktp      = $this->session->userdata('ktp');
    $notelp   = $this->session->userdata('notelp');
    $level    = $this->session->userdata('level');
    $alamat    = $this->session->userdata('alamat');
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

              <a href="<?= base_url('pemohon/datapemohon');?>" class="btn btn-success btn-block"><b>Profil</b></a>
              <a href="<?= base_url('login/logout_pemohon');?>" class="btn btn-danger btn-block"><b>Keluar</b></a>
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
              <li><a href="#pk" data-toggle="tab">Perubahan</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane">
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="pemohon">
              <?php 
                foreach($datapemohon as $p) {
              ?>
              <form method="post" action="<?= base_url("pemohon/tambahdatapemohon"); ?>" enctype="multipart/form-data" class="form-horizontal">
                  <!-- <div class="alert alert-info  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> Pemberitahuan !</h4>
                    Silahkan Melengkapi Data Pemohon Terlebih Dahulu Pada Menu Profile Sebelum Upload Berkas.
                  </div> -->
                  <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">KTP</label>

                    <div class="col-sm-10">
                    <input type="text" name="ktp" class="form-control" id="inputKTP" placeholder="" value="<?= $p->ktp; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNama" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="" value="<?= $p->nama; ?>"readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputJK" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" name="jk" class="form-control" id="inputjk" placeholder="" value="<?= $p->jk; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2 control-label">Alamat Lengkap</label>

                    <div class="col-sm-10">
                      <textArea name="alamat" class="form-control" id="inputalamat" placeholder="" readonly><?= $p->alamat; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPekerjaan" class="col-sm-2 control-label">Pekerjaan</label>

                    <div class="col-sm-10">
                    <input type="text" name="pekerjaan" class="form-control" id="inputpekerjaan" placeholder="" value="<?= $p->pekerjaan; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPemanfaatan" class="col-sm-2 control-label">Pemanfaatan</label>

                    <div class="col-sm-10">
                    <input type="text" name="pemanfaatan" class="form-control" id="inputpemanfaatan" placeholder="" value="<?= $p->pemanfaatan; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputLokasi" class="col-sm-2 control-label">Lokasi yang diajukan</label>

                    <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control" id="inputlokasi" placeholder="" value="<?= $p->lokasi; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputHp" class="col-sm-2 control-label">No. Telpon/HP</label>

                    <div class="col-sm-10">
                    <input type="text" name="notelp" class="form-control" id="inputnotelpon" placeholder="" value="<?= $p->notelp; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </form>
                <?php } ?>
              </div>
              <!-- /.tab-pane -->
      
              <div class="tab-pane" id="pk">
              <?php 
                foreach($datapemohon as $p) {
              ?>
              <form method="post" action="<?= base_url("pemohon/tambahperubahan"); ?>" enctype="multipart/form-data" class="form-horizontal">
                  <!-- <div class="alert alert-info  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> Pemberitahuan !</h4>
                    Silahkan Melengkapi Data Pemohon Terlebih Dahulu Pada Menu Profile Sebelum Upload Berkas.
                  </div> -->
                  <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">Lokasi</label>

                    <div class="col-sm-10">
                    <input type="hidden" name="noktp" class="form-control" id="inputKTP" placeholder="" value="<?= $p->ktp ?>">
                    <input type="text" name="lokasi" class="form-control" id="inputKTP" placeholder="" value="<?= $p->alamat ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputJK" class="col-sm-2 control-label">Tanggal Pengajuan</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_pengajuan" class="form-control" id="inputjk" placeholder="Masukkan Tgl Pengajuan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputJK" class="col-sm-2 control-label">Kelurahan / Kecamatan</label>
                    <div class="col-sm-10">
                      <input type="text" name="kelurahan" class="form-control" id="inputjk" placeholder="Masukkan Kelurahan/Kecamatan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2 control-label">Fungsi Lahan yang diajukan</label>

                    <div class="col-sm-10">
                      <textArea name="lahandiajukan" class="form-control" id="inputalamat" placeholder="" ></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2 control-label">Fungsi Lahan sesuai RTRW</label>

                    <div class="col-sm-10">
                      <textArea name="lahansesuai" class="form-control" id="inputalamat" placeholder="" ></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPekerjaan" class="col-sm-2 control-label">Tujuan Perubahan Lahan</label>

                    <div class="col-sm-10">
                    <input type="text" name="tujuanlahan" class="form-control" id="inputpekerjaan" placeholder="Masukkan Tujuan Perubahan Lahan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPekerjaan" class="col-sm-2 control-label">Status Tanah</label>

                    <div class="col-sm-10">
                    <input type="text" name="statustanah" class="form-control" id="inputpekerjaan" placeholder="Contoh : Milik Sendiri">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPekerjaan" class="col-sm-2 control-label">Dengan Batas - batas</label>

                    <div class="col-sm-4">
                    <input type="text" name="btsutara" class="form-control" id="inputpekerjaan" placeholder="Masukkan Batas Utara">
                    </div>
                    <div class="col-sm-4">
                    <input type="text" name="btsselatan" class="form-control" id="inputpekerjaan" placeholder="Masukkan Batas Selatan">
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="inputPekerjaan" class="col-sm-2 control-label"></label>

                    <div class="col-sm-4">
                    <input type="text" name="btstimur" class="form-control" id="inputpekerjaan" placeholder="Masukkan Batas Barat">
                    </div>
                    <div class="col-sm-4">
                    <input type="text" name="btsbarat" class="form-control" id="inputpekerjaan" placeholder="Masukkan Batas Timur">
                    </div>
                    
                  </div>                                       
                
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </form>
                <?php } ?>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- Data Perubahan Keperuntukan -->
    <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Perubahan Keperuntukan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Lokasi</th>
                            <th>Kel/Kec</th>
                            <th>Lahan Diajukan</th>
                            <th>Lahan Sesuai</th>
                            <th>Tujuan</th>
                            <th>Status Tanah</th>
                            <th width="15%">Status Berkas</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=1;
                            foreach($dataperubahan as $r) {
                        ?>
                            <tr>
                                <td><?= $i ?>
                                <td><?= $r->lokasi; ?></td>
                                <td><?= $r->kelurahan; ?></td>
                                <td><?= $r->lahandiajukan; ?></td>
                                <td><?= $r->lahansesuai; ?></td>
                                <td><?= $r->tujuanlahan; ?></td>
                                <td><?= $r->statustanah; ?></td>
                                <?php 
                                  if($r->status == "Berkas Terkirim"){
                                      echo '<td><span class="label label-default">'. $r->status .'</span></td>';
                                  }
                                  elseif($r->status == "Berkas Diterima") {
                                      echo '<td><span class="label label-info">'. $r->status .'</span></td>';
                                  }
                                  else {
                                    echo '<td><span class="label label-warning">'. $r->status_berkas .'</span></td>';
                                  }
                                ?>
                
                            </tr> 
                        <?php
                            $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
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
<!-- Notification -->
</body>
</html>
