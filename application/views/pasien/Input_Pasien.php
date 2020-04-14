<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>
  
<div class="container">
<form action="<?= site_url('Input/inputpasien') ?>" method="post">
<h2 style="text-align: center;">Input Data Pasein</h2>
<div class="form-group">
  <label for="pwd">Nama :</label>
  <input type="input" class="form-control" id="Nama" name="nama_pasien" required="required">
</div>
<div class="form-group">
  <label for="pwd">tanggal lahir:</label>
  <input type="input" id="tanggal_lahir" class="form-control" name="tanggal_lahir" required="required">
</div>
<div class="form-group">
  <label for="comment">Alamat:</label>
  <textarea class="form-control" rows="5" id="Alamat" name="alamat" required="required"></textarea>
</div>
<div class="form-group">
  <label for="pwd">Email :</label>
  <input type="input" class="form-control" id="Email" name="email" required="required">
</div>
<div class="form-group">
  <label for="pwd">Kontak :</label>
  <input type="input" class="form-control" id="Kontak" name="kontak" required="required">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
<a href="<?= site_url('dokter/LihatDokter') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>
