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
                <form method="POST" action="<?=base_url("admin/ubahdata_analisadata"); ?>" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach($data as $r) { ?>
                    
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                No. KTP
                            </label>
                            <div class="col-sm-8">
                                <input type="hidden" name="id" class="form-control" value="<?= $r->id; ?>">
                                <input type="text" name="noktp" class="form-control" value="<?= $r->noktp; ?>" readonly>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                No. Reg
                            </label>
                            <div class="col-sm-8">
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
                                Petugas Survei
                            </label>
                            <div class="col-sm-8">
                            <select class="form-control" name="petugas_survei">
                                <?php
                                    $petugas = $this->M_analisadata->get();
                                    foreach($petugas as $p) {
                                        echo '<option value="'. $p->nama_petugassurvei .'">'. $p->nama_petugassurvei .'</option>';
                                    }
                                ?>
                            </select>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Tanggal Survei
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" name="tgl_survei" class="form-control">
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