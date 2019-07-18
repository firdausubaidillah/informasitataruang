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
        <div class="col-xs-8">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" action="<?=base_url("admin/ubahdata_pernyataan"); ?>" enctype="multipart/form-data" class="form-horizontal">
                    <?php foreach($data as $r) { ?>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">
                                Nama Pemohon
                            </label>
                            <div class="col-sm-8">
                                <input type="hidden" name="noreg" class="form-control" value="<?= $r->noreg; ?>">
                                <input type="text" name="nama" class="form-control" value="<?= $r->nama; ?>">
                            </div>
                            <span class="help-block"></span>
                        </div>
                    <?php
                        }
                    ?>
                    
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