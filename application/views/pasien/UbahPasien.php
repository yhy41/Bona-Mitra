<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>
  
<div class="container">
<form action="<?= site_url('pasien/ubah').'/'.$pasien['id_pasien'] ?>" method="post">
<h2 style="text-align: center;">Ubah Data Pasein</h2>
<div class="form-group">
  <label for="pwd">Nama :</label>
  <input type="input" class="form-control" id="Nama" name="nama_pasien" value="<?=$pasien['nama_pasien'] ?>" required="required">
</div>
<div class="form-group">
  <label for="pwd">Tanggal Lahir (YY/MM/DD):</label>
  <input type="input" id="tanggal_lahir" class="form-control" name="tanggal_lahir" value="<?=$pasien['tanggal_lahir'] ?>" required="required">
</div>
<div class="form-group">
  <label for="comment">Alamat:</label>
  <textarea class="form-control" rows="5" id="Alamat" name="alamat" required="required"><?=$pasien['alamat'] ?></textarea>
</div>
<div class="form-group">
  <label for="pwd">Email :</label>
  <input type="input" class="form-control" id="Email" name="email" value="<?=$pasien['email'] ?>" required="required">
</div>
<div class="form-group">
  <label for="pwd">Kontak :</label>
  <input type="input" class="form-control" id="Kontak" name="kontak" value="<?=$pasien['kontak'] ?>" required="required">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
<a href="<?= site_url('pasien/LihatPasien') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>

