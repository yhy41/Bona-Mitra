<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>
<div class="container">
  <?php if ($this->session->flashdata('info')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible show" role="alert">
                <?= $this->session->flashdata('info'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
  <?php endif; ?>

  <div class="row mt-3">
    <div class="col md-6">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari data Dokter ... " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="container">
    <h3>Jadwal Dokter</h3>
    <?php if (empty($jadwal)) : ?>
      <div class="alert alert-danger" role="alert">
        Data tidak ditemukan
      </div>
    <?php endif; ?>
    <table class="table mt-4">
      <thead>
        <tr>
            <th class="text-center" scope="col">HARI</th>
            <th class="text-center" scope="col">JAM MULAI</th>
            <th class="text-center" scope="col">JAM SELESAI</th>
            <th class="text-center" scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr><?php foreach ($jadwal as $jdwl) : ?>
          <td class="text-center"><?= $jdwl['hari']; ?></td>
          <td class="text-center"><?= $jdwl['jam_mulai']; ?></td>
          <td class="text-center"><?= $jdwl['jam_selesai']; ?></td>
          <td class="text-center">
            <a href="<?= site_url(); ?>/jadwal/hapus/<?= $jdwl['id_jadwal'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
            <a href="<?= base_url(); ?>index.php/jadwal/ubah/<?= $jdwl['id_jadwal'] ?>" class="badge badge-success float-center" ?>ubah</a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <div class="row mt-3">
      <div class="col md-6 text-center mt-5">
        <a href="<?= site_url(); ?>/jadwal/tambah " class="btn btn-primary">Tambah Jadwal</a>
      </div>
    </div>
  </div>

<?php $this->load->view("template/footer.php") ?>