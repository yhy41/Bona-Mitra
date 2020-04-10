<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Saran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Nav -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= site_url('pilihan/InformasiKlinik') ?>">Klinik Bona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= site_url('pilihan/masukpasien') ?>">Home</a></li>
      <li><a href="#">Saran</a></li>
      <li><a href="#">Lihat Saran</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Cari</button>
    </form>
  </div>
</nav>

    <!-- isi -->

<div class="container">
  <h2>Masukan Saran Anda Untuk Klinik Kami</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Nama :</label>
      <input type="input" class="form-control" id="email" placeholder="Enter nama" name="Nama">
    </div>
    <div class="form-group">
      <label for="pwd">Email :</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="Email">
    </div>
    <div class="form-group">
      <label for="comment">Saran :</label>
      <textarea class="form-control" rows="5" id="Saran" name="Saran"></textarea>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="Pernyataan"> saya menyatakan ini dengan Kondisi Normal </label>
    </div>
    <button type="submit" class="btn btn-default">Kirim</button>
  </form>
</div>

</body>
</html>
