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
              <li><a href="#berkas" data-toggle="tab">Berkas</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
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
              <div class="tab-pane" id="berkas">
              <form method="post" action="<?= base_url("pemohon/tambahdataberkas"); ?>" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputKTP" class="col-sm-2 control-label">KTP</label>
                    
                    <div class="col-sm-10">
                    <input type="text" name="noktp" class="form-control" id="noktp" value="<?= $ktp; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNoreg" class="col-sm-2 control-label">No. Reg</label>
                    
                    <div class="col-sm-10">
                    <input type="text" name="noreg" class="form-control" id="noreg" value="<?= $kodeunik; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNoreg" class="col-sm-2 control-label">Tanggal Pengajuan</label>

                    <div class="col-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          
                          <input type="text" name="tgl" class="form-control" id="tgl" value="<?php $tgl=date('Y-m-d'); echo date_indo($tgl); ?>" readonly>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputNama" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Nama" value="<?= $nama; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputktp" class="col-sm-2 control-label">KTP</label>

                    <div class="col-sm-10">
                      <input type="file" name="ktp" class="form-control" id="inputktp">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputkk" class="col-sm-2 control-label">KK</label>

                    <div class="col-sm-10">
                      <input type="file" name="kk" class="form-control" id="inputkk">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputbkl" class="col-sm-2 control-label">Bukti Kepemilikan Lahan</label>

                    <div class="col-sm-10">
                    <input type="file" name="bkl" class="form-control" id="inputbkl">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputpbb" class="col-sm-2 control-label">Bukti Lunas PBB</label>

                    <div class="col-sm-10">
                    <input type="file" name="pbb" class="form-control" id="inputpbb">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputsppl" class="col-sm-2 control-label">Surat Pernyataan Penunjukkan Lokasi</label>

                    <div class="col-sm-10">
                    <input type="file" name="sppl" class="form-control" id="inputsppl" >
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="inputsk" class="col-sm-2 control-label">Surat Kuasa</label>

                    <div class="col-sm-10">
                    <input type="file" name="sk" class="form-control" id="inputsk">
                    </div>
                  </div> -->
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit2" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                <?php
                  foreach ($timeline as $t) {
                ?>
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          <?= date_indo($t->tgl_ambil); ?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                   <!-- timeline item -->
                  <li>
                    <i class="fa fa-file-archive-o-o bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header">Berkas dengan No. <b><?= $t->noreg; ?></b> Telah disetujui dan ditertibkan</h3>
                      <div class="timeline-body">
                          <p> Silahkan Ambil Berkas Permohonan ITR di Kantor DINAS PEKERJAAN UMUM dan PENATAAN RUANG Kota Pasuruan (Bidang TATA RUANG) </p>
                          <img src="<?= base_url("assets/"); ?>penerbitan.png" alt="..." height="100px" width="150px" class="margin">
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                <?php
                  foreach ($timeline as $t) {
                ?>
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-blue">
                          <?= date_indo($t->tgl_analisa); ?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                   <!-- timeline item -->
                  <li>
                    <i class="fa fa-search bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header">Pengajuan Permohonan ITR dengan No. <b><?= $t->noreg; ?></b> sedang dianalisa oleh <b><?= $t->penganalisa ?></b></h3>
                      <div class="timeline-body">
                          <img src="<?= base_url("assets/"); ?>analisaperuntukanlahan.png" alt="..." height="100px" width="150px" class="margin">
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                <?php
                  foreach ($timeline as $t) {
                ?>
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-purple">
                          <?= date_indo($t->tgl_survei); ?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                   <!-- timeline item -->
                  <li>
                    <i class="fa fa-map-o bg-green"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header">Berkas dengan No. <b><?= $t->noreg; ?></b> Sedang di Survei oleh <b><?= $t->petugas_survei ?></b></h3>
                      <div class="timeline-body">
                          <img src="<?= base_url("assets/"); ?>surveilokasi.png" alt="..." height="100px" width="150px" class="margin">
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                <?php
                  foreach ($timeline as $t) {
                ?>
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-blue">
                          <?= date_indo($t->tgl_persetujuan); ?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                   <!-- timeline item -->
                  <li>
                    <i class="fa fa-check-square bg-green"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header">Berkas dengan No. <b><?= $t->noreg; ?></b> Telah di konfirmasi oleh <b><?= $t->penganalisa ?></b></h3>
                      <div class="timeline-body">
                          <img src="<?= base_url("assets/"); ?>verifikasiberkas.png" alt="..." height="100px" width="150px" class="margin">
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                  <?php
                    foreach ($timeline as $t) {
                  ?>
                  <!-- END timeline item -->
                  <li class="time-label">
                        <span class="bg-orange">
                          <?= date_indo($t->tgl); ?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><b><?= $nama; ?></b> Telah Mengajukan Permohonan ITR dengan No. <b><?= $t->noreg; ?></b></h3>
                      <div class="timeline-body">
                          <img src="<?= base_url("assets/"); ?>inputdata.png" alt="..." height="100px" width="150px" class="margin">
                      </div>
                    </div>
                  </li>
                  <?php } ?>
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
    <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Berkas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. KTP</th>
                            <th>No. Reg</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Nama</th>
                            <th width="20%">Status</th>
                            <th width="20%">OPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=1;
                            foreach($databerkas as $r) {
                        ?>
                            <tr>
                                <td><?= $i ?>
                                <td><?= $r->noktp; ?></td>
                                <td><?= $r->noreg; ?></td>
                                <td><?= date_indo($r->tgl); ?></td>
                                <td><?= $r->nama; ?></td>
                                <?php 
                                  if($r->status_berkas == "Disetujui"){
                                      echo '<td><span class="label label-info">'. $r->status_berkas .'</span></td>';
                                  }
                                  elseif($r->status_berkas == "Menunggu konfirmasi") {
                                      echo '<td><span class="label label-danger">'. $r->status_berkas .'</span></td>';
                                  }
                                  elseif ($r->status_berkas == "Sedang Disurvei") {
                                      echo '<td><span class="label label-default">'. $r->status_berkas .'</span></td>';
                                  }
                                  elseif ($r->status_berkas == "Proses Analisa") {
                                    echo '<td><span class="label label-primary">'. $r->status_berkas .'</span></td>';
                                  }
                                  elseif ($r->status_berkas == "Memenuhi Persyaratan") {
                                    echo '<td><span class="label label-primary">'. $r->status_berkas .'</span></td>';
                                  }
                                  elseif ($r->status_berkas == "Sudah Diambil") {
                                    echo '<td><span class="label label-success">'. $r->status_berkas .'</span></td>';
                                  }
                                  else {
                                    echo '<td><span class="label label-warning">'. $r->status_berkas .'</span></td>';
                                  }
                                ?>
                                <td>
                                    <a href="<?= base_url('pemohon/detail_berkas/') . $r->id; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="<?= base_url('pemohon/downloadformulir/') . $r->id; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-download"></i></a>
                                    
                                </td>
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
