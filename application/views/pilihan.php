<!doctype html>
<html lang="en">
  <head>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Klinik Bona</title>
    <style type="text/css">
      body{
        /*background: url("<?php echo base_url()?>assets/dokter4.jpg") no-repeat;*/
        background-size: 100% 100%;
        width: 100%;
        height: 100%;
      }
      h1{
        font-family: fantasy;
        text-transform: uppercase;
        color: #5F9EA0;
        text-shadow: 3px 3px 0px #D7DACC, 8px 8px 0px rgba(0, 0, 0, 0.1);
        font-size: 350%;
      }
      p{
        font-family: sans-serif;
      }
      .carousel-inner img {
        width: 100%;
        height: 60%;
      }
    </style>
  </head>
  <body>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h5">Login User</h5>
          <a class="nav-link" href="<?= site_url('plotting/HomePasien') ?>">Login as Guest</a>
          <a class="nav-link" href="<?= site_url('Login/index') ?>">Login as Administrator</a>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url()?>/assets/carousel/web1.jpg" alt="Gambar 1">
          <div class="carousel-caption">
            <h1 style="color: black">Klinik Bona</h3>
            <h3 style="color: black">Kami Siap Melayani Anda!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url()?>/assets/carousel/web2.jpg" alt="Gambar 2">
          <div class="carousel-caption">
            <h1 style="color: black">Klinik Bona</h3>
            <h3 style="color: black">Jangan Lupa Sakit Hari Ini!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url()?>/assets/carousel/web3.png" alt="Gambar 3">
          <div class="carousel-caption">
            <h1 style="color: black">Klinik Bona</h3>
            <h3 style="color: black">Kelebihan: "Pengguna BPJS tidak lagi mengantri!"</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>
    <footer class="mastfoot mt-auto" style="text-align: center;">
      <div class="inner">
        <p>Tugas Besar - Pemrograman Web</p>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>