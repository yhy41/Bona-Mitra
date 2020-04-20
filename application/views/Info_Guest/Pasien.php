<?php $this->load->view("template_Info/header.php") ?>
<?php $this->load->view("template_Info/navbar.php") ?>
<style type="text/css">
    body{
      background: url("<?php echo base_url()?>assets/logo1.jpg") no-repeat;
    }
    h1{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
    }
  </style>

<h1 style="text-align: center;">Daftar Pasien Di Klinik Bona</h1>

<div class = "container">
  <div class="col md-6">
    <form action="" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Pasien ... " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
      </div>
    </form>
  </div>
  <?php if (empty($pasien)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
  <?php endif; ?>

  <table class="table table-dark,table-responsive">
    <thead>
      <tr>
          <th class="text-center" scope="col">Nama</th>
          <th class="text-center" scope="col">Tanggal Lahir</th>
          <th class="text-center" scope="col">Alamat</th>
          <th class="text-center" scope="col">Email</th>
          <th class="text-center" scope="col">Kontak</th>
      </tr>
    </thead>
    <tbody>
      <tr><?php foreach ($pasien as $ps) : ?>
          <td class="text-center"><?= $ps['nama_pasien']; ?></td>
          <td class="text-center"><?= $ps['tanggal_lahir']; ?></td>
          <td class="text-center"><?= $ps['alamat']; ?></td>
          <td class="text-center"><?= $ps['email']; ?></td>
          <td class="text-center"><?= $ps['kontak']; ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>

   <!-- <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('pasien/TambahPasien') ?>" class="btn btn-primary">Info Kamar Pasien</a>
                </div> -->
</div>
<?php $this->load->view("template_Info/footer.php") ?>