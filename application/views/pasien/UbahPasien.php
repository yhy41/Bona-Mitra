<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Input Data<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pilihan/Input_Pasien') ?>">Input Data Pasien</a></li>
          <li><a href="<?= site_url('pilihan/Input_Dokter') ?>">Input Data Dokter</a></li>
          <li><a href="<?= site_url('pilihan/Input_Perawat') ?>">Input Data Perawat</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Aktivitas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pilihan/Pembayaran') ?>">Pembayaran Pasien</a></li>
          <li><a href="<?= site_url('pilihan/Jadwal_Dokter') ?>">Jadwal Dokter</a></li>
          <li><a href="<?= site_url('pilihan/Jadwal_Perawat') ?>">Jadwal Perawat</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kelola<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pilihan/Pemeriksaan') ?>">Pemeriksaan Pasien</a></li>
          <li><a href="<?= site_url('pilihan/Info_KamarAdmin') ?>">Kamar</a></li>
          <li><a href="#">---?---</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= site_url('pilihan/masuk') ?>"><span class="glyphicon glyphicon-user"></span> Ganti Akun</a></li>
      <li><a href="<?= site_url('pilihan/index') ?>"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
  </div>
</nav>
  
<div class="container">
  <div class="container">
<form action="<?= site_url('pasien/ubah').'/'.$pasien['id_pasien'] ?>" method="post">
<h2 style="text-align: center;">Ubah Data Pasein</h2>
<div class="form-group">
  <label for="pwd">Nama :</label>
  <input type="input" class="form-control" id="Nama" name="nama_pasien" value="<?=$pasien['nama_pasien'] ?>" required="required">
</div>
<div class="form-group">
  <label for="pwd">tanggal lahir:</label>
  <input type="input" id="tanggal_lahir" class="form-control" name="tanggal_lahir" value="<?=$pasien['tanggal_lahir'] ?>" required="required">
</div>
<div class="form-group">
  <label for="comment">Alamat:</label>
  <textarea class="form-control" rows="5" id="Alamat" name="alamat" required="required"><?=$pasien['alamat'] ?></textarea>
</div>
<div class="form-group">
  <label for="pwd">Email :</label>
  <input type="input" class="form-control" id="Email" name="email" value="<?=$pasien['email'] ?>" required="required">
</div>
<div class="form-group">
  <label for="pwd">Kontak :</label>
  <input type="input" class="form-control" id="Kontak" name="kontak" value="<?=$pasien['kontak'] ?>" required="required">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
<a href="<?= site_url('dokter/LihatDokter') ?>" class="btn btn-primary">Back</a>
</form>
</div>
</div>

</body>
</html>
