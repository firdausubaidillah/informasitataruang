<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Tambah <?= $title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url("admin/"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data</li>
        <li class="active">Tambah <?= $title; ?></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-8">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form method="post" action="<?=base_url("admin/tambahdata_pemohon"); ?>" enctype="multipart/form-data" class="form-horizontal">

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            No. Reg
                        </label>
                        <div class="col-sm-8">
                            <input name="noreg" placeholder="" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Nama Pemohon
                        </label>
                        <div class="col-sm-8">
                            <input name="nama" placeholder="Masukan Nama" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Jenis Kelamin
                        </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="jk">
                                <option value="">--- Pilih jenis Kelamin ---</option> 
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Alamat
                        </label>
                        <div class="col-sm-8">
                            <input name="alamat" placeholder="Masukan Alamat" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Tanggal
                        </label>
                        <div class="col-sm-8">
                            <input name="tgl" placeholder="Masukan tanggal" class="form-control" type="date">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Pekerjaan
                        </label>
                        <div class="col-sm-8">
                            <input name="pekerjaan" placeholder="Masukan pekerjaan" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Pemanfaatan
                        </label>
                        <div class="col-sm-8">
                            <input name="pemanfaatan" placeholder="Masukan pemanfaatan" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Lokasi
                        </label>
                        <div class="col-sm-8">
                            <input name="lokasi" placeholder="Masukan lokasi" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            No. Telpon
                        </label>
                        <div class="col-sm-8">
                            <input name="notelp" placeholder="Masukan no. telp" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="divider"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-6 text-right">
                            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                        </div>
                    </div>
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