<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<div class="container">  
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
<form action="<?= site_url('input/inputperawat') ?>" method="post">
<h2 style="text-align: center;">Input Data Perawat</h2>
<div class="form-group">
  <label for="pwd">Nama :</label>
  <input type="input" class="form-control" id="Nama" name="nama_perawat" required="required">
</div>
<div class="form-group">
  <label for="comment">Alamat:</label>
  <textarea class="form-control" rows="5" id="Alamat" name="alamat" required="required"></textarea>
</div>
<div class="form-group">
  <label for="pwd">Kontak :</label>
  <input type="input" class="form-control" id="Kontak" name="kontak" required="required">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
<a href="<?= site_url('perawat/LihatPerawat') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>

