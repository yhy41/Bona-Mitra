<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<div class="container">
	<form action="<?= site_url('Input/inputjadwal') ?>" method="post">
		<h2 style="text-align: center;">Input Jadwal Dokter</h2>
	<div class="form-group">
	  <label for="pwd">Hari : </label>
	  <input type="input" class="form-control" id="Hari" name="hari" required="required">
	</div>
	<div class="form-group">
	  <label for="comment">Jam Mulai : </label>
	  <input type="input" class="form-control" id="Jam_Mulai" name="jam_mulai" required="required">
	</div>
	<div class="form-group">
	  <label for="pwd">Jam Selesai :</label>
	  <input type="input" class="form-control" id="Jam_Selesai" name="jam_selesai" required="required">
	</div>
	<button type="submit" class="btn btn-primary">Kirim</button>
	<a href="<?= site_url('jadwal/index') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>