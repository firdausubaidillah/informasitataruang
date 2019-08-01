<?php
    $nama     = $this->session->userdata('nama');
?>
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
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Penganalisa
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="penganalisa" class="form-control" value="<?= $nama; ?>" readonly>
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Tanggal Analisa
                            </label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" name="tgl_analisa" class="form-control">
                                </div>
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
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Titik Koordinat 1
                            </label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="titik_koordinat1x" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="titik_koordinat1y" class="form-control">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Titik Koordinat 2
                            </label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="titik_koordinat2x" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="titik_koordinat2y" class="form-control">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Titik Koordinat 3
                            </label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="titik_koordinat3x" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="titik_koordinat3y" class="form-control">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Titik Koordinat 4
                            </label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="titik_koordinat4x" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="titik_koordinat4y" class="form-control">
                            </div>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Foto Lokasi
                            </label>
                            <div class="col-sm-8">
                                <input type="file" name="foto_lokasi" class="form-control">
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