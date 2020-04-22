<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<div class="container">
<form action="<?= site_url('Input/inputrawatinap') ?>" method="post">
<h2 style="text-align: center;">Input Rawat Inap</h2>
<div class="form-group">
  <label for="pwd">ID Pemeriksaan : </label>
  <input type="input" class="form-control" id="ID Pemeriksaan" name="id_pemeriksaan" value="<?= $pemeriksaan['id_pemeriksaan'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">Nama Pasien : </label>
  <input type="input" class="form-control" id="Nama Pasien" name="nama_pasien" value="<?= $pemeriksaan['nama_pasien'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">Nama Dokter : </label>
  <input type="input" class="form-control" id="Nama Pasien" name="nama_dokter" value="<?= $pemeriksaan['nama_dokter'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">Deskripsi Penyakit : </label>
  <input type="input" class="form-control" id="Deskripsi" name="deskripsi" value="<?= $pemeriksaan['deskripsi'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">ID Kamar : </label>
  <input type="input" class="form-control" id="ID Kamar" name="id_kamar" value="<?= $kamar['id_kamar'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">Nama Kamar : </label>
  <input type="input" class="form-control" id="Nama Kamar" name="nama_kamar" value="<?= $kamar['nama_kamar'] ?>" readonly>
</div>
<div class="form-group">
  <label for="pwd">Tanggal Masuk : </label>
  <input type="input" class="form-control" id="Tanggal Masuk" name="tanggal_masuk" required="required">
</div>
<div class="form-group">
  <label for="pwd">Tanggal Keluar : </label>
  <input type="input" class="form-control" id="Tanggal Keluar" name="tanggal_keluar" required="required">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
<a href="<?= site_url('rawatInap/index') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>