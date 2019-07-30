<?php
  $nama     = $this->session->userdata('nama');
?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url('assets/backend/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $nama; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="<?php if($title=='Dashboard') { echo "active"; } ?>"><a href="<?= base_url('admin/index'); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
      <!--  -->
      <li class="<?php if(($title=='Pemohon') OR ($title=='Berkas')) { echo "active"; } ?> treeview">
          <a href="<?= base_url(); ?>#">
              <i class="fa fa-laptop"></i> <span>Data Master</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($title=='Pemohon'){ echo "active"; } ?>"><a href="<?= base_url("admin/pemohon"); ?>"><i class="fa fa-circle-o text-aqua"></i> Pemohon</a></li>
            <li class="<?php if($title=='Berkas'){ echo "active"; } ?>"><a href="<?= base_url("admin/berkas"); ?>"><i class="fa fa-circle-o text-aqua"></i> Berkas</a></li>
          </ul>
      </li>
      <li class="<?php if($title=='Analisa Data') { echo "active"; } ?>"><a href="<?= base_url('admin/analisadata'); ?>"><i class="fa fa-check-square"></i><span>Analisa Data</span></a></li>
      <li class="<?php if($title=='Petugas Survei') { echo "active"; } ?>"><a href="<?= base_url('admin/petugassurvei'); ?>"><i class="fa fa-users"></i><span>Petugas Survei</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
