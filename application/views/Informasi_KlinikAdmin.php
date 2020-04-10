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
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Input Data<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Input Data Pasien</a></li>
          <li><a href="#">Input Data Dokter</a></li>
          <li><a href="#">Input Data Perawat</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Aktivitas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Pembayaran Pasien</a></li>
          <li><a href="#">Jadwal Dokter</a></li>
          <li><a href="#">Jadwal Perawat</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= site_url('pilihan/masuk') ?>"><span class="glyphicon glyphicon-user"></span> Ganti Akun</a></li>
      <li><a href="<?= site_url('pilihan/index') ?>"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
  </div>
</nav>
  
<div class="container">
  <h3>Kami Adalah Satu Satunya Klinik yang berada di Kota Bumi Prov Lampung Utara</h3>
  <p>Kami hanya klinik Biasa dan tidak murah</p>
  <p>Anda sakit pasti ke kami </p>
  <p>Bayar di muka Anjing</p>
</div>

</body>
</html>
