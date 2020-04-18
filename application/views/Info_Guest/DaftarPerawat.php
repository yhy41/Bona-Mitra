<?php $this->load->view("template_Info/header.php") ?>
<?php $this->load->view("template_Info/navbar.php") ?>
<style type="text/css">
  body{
    background: url("<?php echo base_url()?>assets/nurse.jpg") no-repeat;
  }
  h1{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
  }
  table    { border:ridge 1px black; background-color:#C0C0C0; color:black; }
  table td { border:inset 1px black; }
</style>

<h1 style="text-align: center;">Daftar Perawat Di Klinik Bona</h1>

<div class="container">
  <div class="col md-6">
    <form action="" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari perawat ... " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
      </div>
    </form>
  </div>
<?php if (empty($perawat)) : ?>
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
    <tr>
      <tr><?php foreach ($perawat as $pr) : ?>
        <td class="text-center"><?= $pr['id_perawat']; ?></td>
        <td class="text-center"><?= $pr['nama_perawat']; ?></td>
        <td class="text-center"><?= $pr['alamat']; ?></td>
        <td class="text-center"><?= $pr['kontak']; ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
   <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('Info_Guest/Jadwal_Perawat') ?>" class="btn btn-primary">Lihat Jadwal Perawat</a>
                </div>
  </div>
<?php $this->load->view("template_Info/footer.php") ?>
