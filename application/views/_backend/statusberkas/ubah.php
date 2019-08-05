<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Ubah <?= $title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url("admin/"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data</li>
        <li class="active">Ubah <?= $title; ?></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="<?=base_url("admin/ubahdata_statusberkas"); ?>" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach($data as $r) { ?>
                    
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                No. Reg
                            </label>
                            <div class="col-sm-8">
                                <input type="hidden" name="id" class="form-control" value="<?= $r->id; ?>">
                                <input type="text" name="noreg" class="form-control" value="<?= $r->noreg; ?>" readonly>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Nama
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" value="<?= $r->nama; ?>" readonly>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                               Status Berkas
                            </label>
                            <div class="col-sm-8">
                                <select class="form-control" name="status_berkas">
                                    <option Select Disabled>Memenuhi Persyaratan</option>
                                    <option>Belum Diambil</option>
                                    <option>Sudah Diambil</option>
                                </select>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Nama Pengambil
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_pengambil" class="form-control">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Tanggal Ambil
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" name="tgl_ambil" class="form-control">
                                </div>
                            </div>
                            <span class="help-block"></span>
                        </div>

                        <div class="divider"></div>
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-2 text-left">
                                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </form>
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