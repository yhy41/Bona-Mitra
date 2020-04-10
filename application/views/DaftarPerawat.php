<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Perawat</title>
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
      <a class="navbar-brand" href="<?= site_url('pilihan/InformasiKlinik') ?>">Klinik Bona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= site_url('pilihan/masukpasien') ?>">Home</a></li>
      <li><a href="#">Perawat</a></li>
      <li><a href="#">Jadwal</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Cari</button>
    </form>
  </div>
</nav>
<h1 style="text-align: center;">Daftar Dokter Di Klinik Bona</h1>

<div class="container">
  <table class="table table-dark,table-responsive">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NO Kerja</th>
      <th scope="col">Nama</th>
      <th scope="col">NoHp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
 
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>

    </tr>
  </tbody>
</table>
</div>

</body>
</html>
