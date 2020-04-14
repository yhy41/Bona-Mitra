<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>
<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= site_url('pilihan/InformasiKlinikAdmin') ?>">Klinik Bona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= site_url('pilihan/Home_admin')?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Input Data<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pilihan/Input_Pasien') ?>">Input Data Pasien</a></li>
          <li><a href="<?= site_url('pilihan/Input_Dokter') ?>">Input Data Dokter</a></li>
          <li><a href="<?= site_url('pilihan/Input_Perawat') ?>">Input Data Perawat</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Aktivitas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pilihan/Pembayaran') ?>">Pembayaran Pasien</a></li>
          <li><a href="<?= site_url('pilihan/Jadwal_Dokter') ?>">Jadwal Dokter</a></li>
          <li><a href="<?= site_url('pilihan/Jadwal_Perawat') ?>">Jadwal Perawat</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kelola<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pilihan/Pemeriksaan') ?>">Pemeriksaan Pasien</a></li>
          <li><a href="<?= site_url('pilihan/Info_KamarAdmin') ?>">Kamar</a></li>
          <li><a href="#">---?---</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= site_url('pilihan/masuk') ?>"><span class="glyphicon glyphicon-user"></span> Ganti Akun</a></li>
      <li><a href="<?= site_url('pilihan/index') ?>"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
    </ul>
  </div>
</nav> -->
<!-- bagian flash info -->
<?php if ($this->session->flashdata('info')) : ?>
  <div class="alert alert-success alert-dismissible show" role="alert">
    <strong><?= $this->session->flashdata('info'); ?>.</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>
<!-- bagian akhir flash info -->

<div class="container">
<form action="<?= site_url('dokter/Ubah').'/'.$dokter['id_dokter'] ?>" method="post">
<h2 style="text-align: center;">Ubah Data </h2>
<div class="form-group">
  <label for="pwd">Nama :</label>
  <input type="input" class="form-control" id="Nama" name="nama_dokter" value="<?=$dokter['nama_dokter'] ?>"  required="required">
</div>
<div class="form-group">
  <label for="comment">Alamat:</label>
  <textarea class="form-control" rows="5" id="Alamat" name="alamat"  required="required"><?=$dokter['alamat'] ?></textarea>
</div>
<div class="form-group">
  <label for="pwd">Kontak :</label>
  <input type="input" class="form-control" id="Kontak" name="kontak" value="<?=$dokter['kontak'] ?>" required="required">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
<a href="<?= site_url('dokter/LihatDokter') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>