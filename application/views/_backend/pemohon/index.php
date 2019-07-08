<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data <?= $title ?>
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
        <div class="box-header with-border">
                <h3 class="box-title"><a href="<?= base_url('admin/tambah_pemohon'); ?>" class="btn btn-primary pull-right">Tambah <?= $title ?></a></h3>
        </div>
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No. Reg</th>
                            <th>Nama Pemohon</th>
                            <th>Alamat</th>
                            <th>Tgl Pengajuan</th>
                            <th>Tgl Pengajuan</th>
                            <th width="10%">OPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($data as $r) {
                        ?>
                            <tr>
                                <td><?= $r->noreg; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/tampil_ubah_jabatan/') . $r->noreg; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                                    <a href="<?= base_url('admin/delete_jabatan/') . $r->noreg; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php
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
