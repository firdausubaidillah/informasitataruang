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
            <div class="alert alert-warning">
                <ul class="margin-bottom-none padding-left-lg">
                    <li>Ubah Status Berkas <b>MEMENUHI PERSYARATAN</b> menjadi <b>"BELUM DIAMBIL"</b> Tanpa Menambah Nama dan Tanggal Ambil Berkas.
                    <li>Ubah Status Berkas <b>BELUM DIAMBIL</b> menjadi <b>"SUDAH DIAMBIL"</b> Dengan Menambah Nama dan Tanggal Ambil Apabila berkas sudah diambil Pemohon
                </ul>
            </div>
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>No. Reg</th>
                            <th>Nama Pemohon</th>
                            <th>Status Berkas</th>
                            <th width="10%">OPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=1;
                            foreach($data as $r) {
                        ?>
                            <tr>
                                <td><?= $i ?>
                                <td><?= $r->noreg; ?></td>
                                <td><?= $r->nama; ?></td>
                                <td><?= $r->status_berkas; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/tampilubah_statusberkas/') . $r->id; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
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
