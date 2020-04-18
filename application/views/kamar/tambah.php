<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>
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
<form action="<?= site_url('Input/inputkamar') ?>" method="post">
<h2 style="text-align: center;">Input Data Kamar</h2>
<div class="form-group">
    <label for="nama">Nama Kamar</label>
    <input type="text" class="form-control" id="nama_kamar" name="nama_kamar">
</div>
<button type="submit" class="btn btn-primary">Tambah Data</button>
<a href="<?= site_url('kamar') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>