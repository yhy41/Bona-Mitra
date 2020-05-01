<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<div class="container">
<form action="<?= site_url('Input/inputpemeriksaan') ?>" method="post">
<h2 style="text-align: center;">Input Data Pemeriksaan</h2>
<div class="form-group">
  <label for="pwd">ID Pasien :</label>
  <input type="input" class="form-control" id="ID Pasien" name="id_pasien" value="<?= $pasien['id_pasien'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">Nama Pasien :</label>
  <input type="input" class="form-control" id="Nama Pasien" name="nama_pasien" value="<?= $pasien['nama_pasien'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">ID Dokter :</label>
  <input type="input" class="form-control" id="Nama Pasien" name="id_dokter" value="<?= $dokter['id_dokter'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">Nama Dokter :</label>
  <input type="input" class="form-control" id="Nama Dokter" name="nama_dokter" value="<?= $dokter['nama_dokter'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">Tanggal :</label>
  <input type="input" class="form-control" id="Tanggal" name="tanggal" required="required">
</div>
<div class="form-group">
  <label for="comment">Deskripsi:</label>
  <textarea class="form-control" rows="5" id="Deskripsi" name="deskripsi" required="required"></textarea>
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
<a href="<?= site_url('pemeriksaan/index') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer_pasien.php") ?>