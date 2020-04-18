<!DOCTYPE html>
<html lang="en">
<head>
  <title>Informasi-Klinik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      background: url("<?php echo base_url()?>assets/dokter6.jpg") no-repeat;
    }
      h3{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Klinik Bona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= site_url('pilihan/masukpasien') ?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Pasien</a></li>
          <li><a href="#">Dokter</a></li>
          <li><a href="#">Perawat</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Masukan<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Saran</a></li>
          <li><a href="#">Komentar</a></li>
          <li><a href="#">Kritik</a></li>
        </ul>
      </li>
      <li><a href="#">Kontak</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Kami adalah klinik bona yang dibentuk untuk melayani masyarakat tanpa pamrih</h3>
  <p>Kami Hadir Untuk Anda</p>
  <p>Anda Adalah Prioritas Kami</p>
  <p>Kesehatan Masyarakat Hal Yang Paling Penting</p>
</div>

</body>
</html>
