<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $title ?>
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?= $title ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-xs-12">
           <!--  <div class="alert alert-warning">
                <ul class="margin-bottom-none padding-left-lg">
                    <li>Ubah Status Berkas <b>DISETUJUI</b> menjadi <b> "SEDANG DISURVEI"</b> sebelum Menganalisa Berkas.</li>
                    <li>Ubah Status Berkas <b>PROSES ANALISA</b> menjadi <b> "MEMENUHI PERSYARATAN"</b></li>
                </ul>
            </div> -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>No. KTP</th>
                            <th>Lokasi</th>
                            <th>Kelurahan</th>
                            <th>Lahan Diajukan</th>
                            <th>Lahan Sesuai</th>
                            <th>Tujuan</th>
                            <th>Status Tanah</th>
                            <th>Status</th>
                            <th width="5%">OPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=1;
                            foreach($data as $r) {
                        ?>
                            <tr>
                                <td><?= $i ?>
                                <td><?= $r->noktp; ?></td>
                                <td><?= $r->lokasi; ?></td>
                                <td><?= $r->kelurahan; ?></td>
                                <td><?= $r->lahandiajukan; ?></td>
                                <td><?= $r->lahansesuai; ?></td>
                                <td><?= $r->tujuanlahan; ?></td>
                                <td><?= $r->statustanah; ?></td>
                                <td><?= $r->status; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/tampilperubahan/') . $r->id_perubahan; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
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
  <!-- /.content -->
</div>
