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
                <h3 class="box-title"><a href="<?= base_url('admin/tambah_pernyataan'); ?>" class="btn btn-primary pull-right">Tambah <?= $title ?></a></h3>
        </div>
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Nama Pemohon</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th> 
                            <th>Pekerjaan</th>
                            <th>No KTP</th>
                            <th>No Telp</th>
                            <th>Lokasi</th>
                            <th>Tgl Pengajuan</th>
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
                                <td><?= $r->id; ?></td>
                                <td><?= $r->nama; ?></td>
                                <td><?= $r->jk; ?></td>
                                <td><?= $r->alamat; ?></td>
                                <td><?= $r->pekerjaan; ?></td>
                                <td><?= $r->ktp; ?></td>
                                <td><?= $r->notelp; ?></td>
                                <td><?= $r->lokasi; ?></td>
                                <td><?= $r->tgl; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/tampilubah_pernyataan/') . $r->id; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="<?= base_url('admin/hapus_pernyataan/') . $r->id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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
