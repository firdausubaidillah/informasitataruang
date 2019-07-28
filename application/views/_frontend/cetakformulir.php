<!DOCTYPE html>
<html>
<body>
<style>
h1 {
	margin-bottom:0px;
	margin-top:0px;
}
h2 {
	margin-bottom:0px;
	margin-top:0px;
}
body{
	
	width:20cm;
	margin:0;
	min-height:27cm;
}
.tabel1{
	border-top: 4px double;
    border-bottom: 4px double;
    border-left: 4px double;
    border-right: 4px double;
}
</style>
<br>
	<table align="center" width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
  	<td width="12%" align="center"><img src="<?= base_url('assets/');?>logo.png" width="90" height="110" /></td>
    <td width="73%"align="center">
      <h4 style="margin-bottom: -19px;">PEMERINTAH KOTA PASURUAN</h4>
      <h3 style="margin-bottom: -19px;"><b>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA PASURUAN</b></h3>
	  <h5 style="margin-bottom: -19px;">JALAN PAHLAWAN NO. 22 A TELP. (0343) 424524 FAX. (0343) 425582</h5>
	  <h5 style="margin-bottom: -19px;">P A S U R U A N 67126</h5>
      <br />
	</td>

  </tr>
  <tr>
    <td colspan="4" width="100%" align="center"><hr style="border:2px solid #000000;" />
<hr style="border:1px solid #000000; margin-top:-7px;" /></td>
  </tr>

    <?php
        foreach($noreg as $e) {
    ?>
    <?php
        foreach($datapemohonberkas as $f) {
    ?>

  <table class="tabel1" align="center" width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
  	<td colspan="4"><br></td>
  </tr>

  <tr>
  	<td colspan="4" align="center"><b>FORMULIR PERMOHONAN INFORMASI TATA RUANG ( ITR )</b></td>
  </tr>

  <tr>
  	<td colspan="4"><br></td>
  </tr>
  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td>Pasuruan, <?php echo $hasil['tanggal'] ?></td>
  </tr>

  <tr>
	<td width="5%"></td>
	<td width="10%">No. Reg : </td>
    <td width="45%"><?= $e->noreg; ?></td>
	<td width="40%">Kepada : </td>
  </tr>
 
  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td>Yth. Bapak Walikota Pasuruan</td>
  </tr>

  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cq. Kepala Dinas Pekerjaan Umum dan</td>
  </tr>

  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penataan Ruang Kota Pasuruan</td>
  </tr>
  
  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jl. Pahlawan No. 22 A</td>
  </tr>

  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;di</td>
  </tr>

  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u> P A S U R U A N</u></b></td>
  </tr>
  
  <tr>
  	<td colspan="4"><br></td>
  </tr>
  
  </table>
	<br>
  <table class="tabel1" align="center" width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
	<td><br></td>
  </tr>
  
  <tr>
  	<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;Dengan Hormat,</td>
  </tr>

  <tr>
	<td><br></td>
  </tr>

  <tr>
  	<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini perkenankanlah kami mengajukan permohonan Informasi Tata Ruang sesuai aturan yang &nbsp;&nbsp;&nbsp;&nbsp;berlaku</td>
  </tr>
  
  <tr>
	<td><br></td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;</td>
  	<td width="20%">Nama</td>
  	<td width="5%">:</td>
  	<td width="70%"><?= $f->nama; ?></td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;</td>
  	<td width="20%">Jenis Kelamin</td>
  	<td width="5%">:</td>
  	<td width="70%"><?= $f->jk; ?></td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;</td>
  	<td width="20%">Alamat</td>
  	<td width="5%">:</td>
  	<td width="70%"><?= $f->alamat; ?></td>
  </tr>
  
  <tr>
	<td><br></td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;</td>
  	<td width="20%">Pekerjaan</td>
  	<td width="5%">:</td>
  	<td width="70%"><?= $f->pekerjaan; ?></td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.&nbsp;&nbsp;</td>
  	<td width="20%">Pemanfaatan</td>
  	<td width="5%">:</td>
  	<td width="70%"><?= $f->pemanfaatan; ?></td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.&nbsp;&nbsp;</td>
  	<td width="20%">Lokasi</td>
  	<td width="5%">:</td>
  	<td width="70%"><?= $f->lokasi; ?></td>
  </tr>

  <tr>
	<td><br></td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.&nbsp;&nbsp;</td>
  	<td width="20%">No. Telp/HP</td>
  	<td width="5%">:</td>
  	<td width="70%"><?= $f->notelp; ?></td>
  </tr>
  
  <tr>
	<td><br></td>
  </tr>

  <tr>
  	<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selanjutnya sebagai kelengkapan pengajuan tersebut, kami lampirkan data sebagi berikut :</td>
  </tr>
  
  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;</td>
  	<td colspan="3">Fotokopi KTP & KK</td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;</td>
  	<td colspan="3">Fotokopi Bukti Kepemilikan atau Kepenguasaan yang telah dilegalisir (Sertipikat)</td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;</td>
  	<td colspan="3">Bukti Lunas Pajak Bumi Bangunan</td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;</td>
  	<td colspan="3">Surat Pernyataan Penunjukan Lokasi yang dimohonkan (Bermaterai)</td>
  </tr>

  <tr>
  	<td width="4%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.&nbsp;&nbsp;</td>
  	<td colspan="3">Surat Kuasa **)</td>
  </tr>

  <tr>
	<td><br></td>
  </tr>
  
  <tr>
  	<td colspan="4" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kelengkapan tersebut kami lampirkan sesuai aslinya sebagai persyaratan pengurusan Permohonan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Informasi Tata Ruang dan apabila dikemudian hari terdapat hal yang tidak sesuai dengan pengajuan tersebut di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atas, kami bersedia mempertanggung jawabkan sesuai peraturan yang berlaku.</td>
  </tr>

  <tr>
  	<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian permohonan kami ajukan, atas perhatian kami ucapkan terima kasih.</td>
  </tr>
  
  <tr>
	<td><br></td>
  </tr>
  
  <tr>
  	<td width="4%"></td>
	<td width="20%"></td>
	<td width="4%"></td>
  	<td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hormat Kami,</td>
  </tr>
  <tr>
	<td><br></td>
  </tr>
  <tr>
  <td width="4%"></td>
	<td width="20%"></td>
	<td width="4%"></td>
  	<td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Materai</td>
  </tr>

  <tr>
  <td width="4%"></td>
	<td width="20%"></td>
	<td width="4%"></td>
  	<td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp. 6000</td>
  </tr>

  <tr>
	<td><br></td>
  </tr>

  <tr>
  	<td width="4%"></td>
	<td width="20%"></td>
	<td width="4%"></td>
  	<td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(.................................................)</td>
  </tr>

  <tr>
	<td><br></td>
  </tr>

  <tr>
  	<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;*) Coret yang tidak perlu</td>
  </tr>

  <tr>
  	<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;**) Bila dikuasakan pada orang lain</td>
  </tr>

  <tr>
  	<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;***) Mohon diisi dengan lengkap untuk kemudahan administrasi</td>
  </tr>

  <tr>
  	<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;****) Pengurusan Permohonan Informasi Tata Ruang Tidak Dikenakan Biaya <b><u><i>(GRATIS)</b></u></i></td>
  </tr>

  
  </table>
  <?php } ?>
  <?php } ?>
</table>
       


<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <table align="center" width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td align="center">
      <h3 style="margin-bottom: -19px;"><u>SURAT PERNYATAAN</u></h3>
      <h4 style="margin-bottom: -19px;"><b>PENUNJUKAN LOKASI INFORMASI TATA RUANG</b></h4>
      <br />
  </td>

  </tr>
  
  <tr>
    <td colspan="4"><br></td>
  </tr>
  
  <table align="center" width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
  <td><br></td>
  </tr>
  
  <tr>
    <td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini:</td>
  </tr>

  <tr>
  <td><br></td>
  </tr>


  <tr>
    <td width="30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
    <td width="5%">:</td>
    <td width="70%"><?php echo $hasil['nama'] ?></td>
  </tr>

  <tr>
    <td width="35%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</td>
    <td width="5%">:</td>
    <td width="70%"><?php echo $hasil['jeniskelamin'] ?></td>
  </tr>

  <tr>
    <td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
    <td width="5%">:</td>
    <td width="70%"><?php echo $hasil['alamat'] ?></td>
  </tr>
  
  <tr>
  <td><br></td>
  </tr>

  <tr>
    <td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
    <td width="5%">:</td>
    <td width="70%"><?php echo $hasil['pekerjaan'] ?></td>
  </tr>

  <tr>
    <td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. KTP</td>
    <td width="5%">:</td>
    <td width="70%"><?php echo $hasil['noktp'] ?></td>
  </tr>

  <tr>
    <td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. TLP</td>
    <td width="5%">:</td>
    <td width="70%"><?php echo $hasil['notelpon'] ?></td>
  </tr>

  <tr>
    <td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lokasi</td>
    <td width="5%">:</td>
    <td width="70%"><?php echo $hasil['lokasi'] ?></td>
  </tr>
  
  <tr>
  <td><br></td>
  </tr>

  <tr>
  <td><br></td>
  </tr>

  <tr>
    <td colspan="4" align="center">
      <h3 style="margin-bottom: -19px;"><u>MENYATAKAN</u></h3>
      <br />
    </td>

  <tr>
  <td><br></td>
  </tr>

  <tr>
    <td colspan="4" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telah menunjukkan dan membenarkan lokasi permohonan Informasi Tata Ruang sesuai permohonan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yang diajukan sebagai kelengkapan pengurusan Informasi Tata Ruang</td>
  </tr>
  
  <tr>
  <td><br></td>
  </tr>
  
  <tr>
    <td colspan="4" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Pernyataan penunjukan lokasi ini merupakan satu kesatuan yang tidak terpisahkan dengan surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;permohonan Informasi Tata Ruang</td>
  </tr>
  
  <tr>
  <td><br></td>
  </tr>
  
  <tr>
    <td colspan="4" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat pernyataan ini dibuat dengan sebenarnya dan tanpa paksaan dan apabila dikemudian &nbsp;&nbsp;&nbsp;&nbsp; hari terjadi ketidak sesuaian maka saya bersedia mempertanggung jawabkan secara hukum sesuai dengan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peraturan yang berlaku</td>
  </tr>

  <tr>
  <td><br></td>
  </tr>
  <tr>
  <td><br></td>
  </tr>
  
  <tr>
    <td width="4%"></td>
  <td width="20%"></td>
  <td width="4%"></td>
    <td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pasuruan, <?php echo $hasil['tanggal'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>

  <tr>
    <td width="4%"></td>
    <td width="20%"></td>
    <td width="4%"></td>
    <td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yang menyatakan</td>
  </tr>

  <tr>
    <td width="4%"></td>
    <td width="20%"></td>
    <td width="4%"></td>
    <td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Materai</td>
  </tr>

  <tr>
  <td width="4%"></td>
  <td width="20%"></td>
  <td width="4%"></td>
    <td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp. 6000</td>
  </tr>

  <tr>
  <td><br></td>
  </tr>
  <tr>
  <td><br></td>
  </tr>
  <tr>
    <td width="4%"></td>
  <td width="20%"></td>
  <td width="4%"></td>
    <td width="70%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(.................................................)</td>
  </tr>

  <tr>
  <td><br></td>
  </tr>
  </table>
</table>
</body>
</html>