<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<?php if ($this->session->flashdata('info')) : ?>
  <div class="alert alert-success alert-dismissible show" role="alert">
    <strong><?= $this->session->flashdata('info'); ?>.</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>

<div class="container">
    <form action="<?= site_url('kamar/change').'/'.$kamar_inap['id_kamar'] ?>" method="post">
        <h2 style="text-align: center;">Ubah Data Kamar </h2>
            <div class="form-group">
                <label for="nama">Nama Kamar</label>
                <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" value="<?= $kamar_inap['nama_kamar']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
<a href="<?= site_url('kamar') ?>" class="btn btn-primary">Back</a>

<?php $this->load->view("template/footer.php") ?>
</div> 