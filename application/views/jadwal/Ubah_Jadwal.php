<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>
  
<div class="container">
<form action="<?= site_url('jadwal/ubah').'/'.$jadwal['id_jadwal'] ?>" method="post">
<h2 style="text-align: center;">Ubah Jadwal Dokter</h2>
<div class="form-group">
  <label for="pwd">Hari : </label>
  <input type="input" class="form-control" id="Hari" name="hari" value="<?=$jadwal['hari'] ?>" required="required">
</div>
<div class="form-group">
  <label for="pwd">Jam Mulai : </label>
  <input type="input" id="Jam_Mulai" class="form-control" name="jam_mulai" value="<?=$jadwal['jam_mulai'] ?>" required="required">
</div>
<div class="form-group">
  <label for="pwd">Jam Selesai : </label>
  <input type="input" class="form-control" id="Jam_Selesai" name="jam_selesai" value="<?=$jadwal['jam_selesai'] ?>" required="required">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
<a href="<?= site_url('jadwal/index') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>