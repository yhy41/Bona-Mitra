<?php $this->load->view("template_Info/header.php") ?>
<?php $this->load->view("template_Info/navbar.php") ?>
<style type="text/css">
  body{
    background: url("<?php echo base_url()?>assets/dokter7.jpg") no-repeat;
  }
  h1{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
  }
  table    { border:ridge 1px black; background-color:#C0C0C0; color:black; }
  table td { border:inset 1px black; }
</style>

<h1 style="text-align: center;">Daftar Dokter Di Klinik Bona</h1>

<div class="container">
  <div class="col md-6">
    <form action="" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari dokter ... " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
      </div>
    </form>
  </div>
  <?php if (empty($dokter)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
  <?php endif; ?>
  <table class="table table-dark,table-responsive">
    <thead>
      <tr>
          <th class="text-center" scope="col">ID</th>
          <th class="text-center" scope="col">Nama</th>
          <th class="text-center" scope="col">Alamat</th>
          <th class="text-center" scope="col">Kontak</th>
      </tr>
    </thead>
    <tbody>
      <tr><?php foreach ($dokter as $dr) : ?>
          <td class="text-center"><?= $dr['id_dokter']; ?></td>
          <td class="text-center"><?= $dr['nama_dokter']; ?></td>
          <td class="text-center"><?= $dr['alamat']; ?></td>
          <td class="text-center"><?= $dr['kontak']; ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('pasien/TambahPasien') ?>" class="btn btn-primary">Lihat Jadwal Dokter</a>
                </div>
  </div>
<?php $this->load->view("template_Info/footer.php") ?>
