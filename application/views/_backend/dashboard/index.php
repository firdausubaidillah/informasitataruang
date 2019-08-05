<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Version 1.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>150</h3>

              <p>MONITOR BERKAS</p>
            </div>
            <div class="icon">
              <i class="ion ion-monitor"></i>
            </div>
            <a href="<?= base_url('admin/monitorberkas/'); ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>DATA PEMOHON</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?= base_url('admin/pemohon/'); ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>DATA BERKAS</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url('admin/berkas/'); ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>ANALISA DATA</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('admin/analisadata/'); ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
      </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <section class="content">
     <!-- Small boxes (Stat box) -->
     <div class="row">
      <div class="col-xs-12">
      <div class="alert alert-warning">
                <ul class="margin-bottom-none padding-left-lg">
                    <li>Untuk Mengganti Status Berkas Silahkan Memilih Menu MONITOR BERKAS.</li>
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
  </section>
</div>
