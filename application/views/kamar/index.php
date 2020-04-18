<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= site_url('pilihan/InformasiKlinikAdmin') ?>">Klinik Bona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= site_url('pilihan/Home_admin')?>">Home</a></li>
      <li><a href="<?= site_url('kamar') ?>"><span class=""></span> Kamar</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= site_url('pilihan/masuk') ?>"><span class="glyphicon glyphicon-user"></span> Ganti Akun</a></li>
      <li><a href="<?= site_url('pilihan/index') ?>"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
  </div>
</nav>
  
<div class="container">
  <h3 class="text-center">Informasi Kamar</h3>
  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Kamar <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <input type="text" class="form-control" placeholder="Cari nama Kamar ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <?php if (empty($kamar_inap)) : ?>
            <div class="alert alert-danger" role="alert">
                Tidak ada kamar yang terdaftar
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                      <th class="text-center" scope="col">ID KAMAR</th>
                      <th class="text-center" scope="col">NAMA KAMAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($kamar_inap as $kinap) : ?>
                      <td class="text-center"><?= $kinap['id_kamar']; ?></td>
                      <td class="text-center"><?= $kinap['nama_kamar']; ?></td>
                      <td class="text-center">
                          <a href="<?= base_url(); ?>index.php/kamar/delete/<?= $kinap['id_kamar'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                          <a href="<?= base_url(); ?>index.php/kamar/change/<?= $kinap['id_kamar'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                <a href="<?= site_url('kamar/tambahKamar') ?>" class="btn btn-primary">Tambah Data Kamar</a>
                </div>
            </div>

        </div>
    </div>
</div> 

</body>
</html>
