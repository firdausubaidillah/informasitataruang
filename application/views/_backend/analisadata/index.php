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
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>No. KTP</th>
                            <th>No. Reg</th>
                            <th>Tanggal</th>
                            <th>Nama Pemohon</th>
                            <th>Petugas Survei</th>
                            <th>Tanggal Survei</th>
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
                                <td><?= $r->noreg; ?></td>
                                <td><?= date_indo($r->tgl); ?></td>
                                <td><?= $r->nama; ?></td>
                                <td><?= $r->petugas_survei; ?></td>
                                <td><?= date_indo($r->tgl_survei); ?></td>
                                <td>
                                    <a href="<?= base_url('admin/tampilubah_analisadata/') . $r->id; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
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
