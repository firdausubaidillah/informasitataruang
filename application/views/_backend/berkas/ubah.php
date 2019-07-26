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
                <form method="POST" action="<?=base_url("admin/ubahdata_pemohon"); ?>" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach($data as $r) { ?>
                    
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                No. KTP
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" value="<?= $r->noktp; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                No. Reg
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="jk" class="form-control" value="<?= $r->noreg; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Nama
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="alamat" class="form-control" value="<?= $r->nama; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                KTP
                            </label>
                            <div class="col-sm-8">
                                <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$r->ktp  ?>"/>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                KK
                            </label>
                            <div class="col-sm-8">
                                <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$r->kk  ?>"/>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                BKL
                            </label>
                            <div class="col-sm-8">
                                <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$r->bkl  ?>"/>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                PBB
                            </label>
                            <div class="col-sm-8">
                                <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$r->pbb  ?>"/>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                SPPL
                            </label>
                            <div class="col-sm-8">
                                <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$r->sppl  ?>"/>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                SK
                            </label>
                            <div class="col-sm-8">
                                <img class="img-thumbnail" src="<?= base_url() . 'assets/gambar/'.$r->sk  ?>"/>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Status Berkas
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="status_berkas" class="form-control" value="<?= $r->status_berkas; ?>">
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