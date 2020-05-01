<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= site_url('pilihan/InformasiKlinik') ?>">Klinik Bona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= site_url('plotting/HomePasien') ?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pasien/indexinfo') ?>">Pasien</a></li>
          <li><a href="<?= site_url('dokter/indexinfo') ?>">Dokter</a></li>
          <li><a href="<?= site_url('perawat/indexinfo') ?>">Perawat</a></li>
        </ul>
      </li>
      <li><a href="<?= site_url('Input_Masukan/index') ?>">Masukan</a></li>
      <li><a href="<?= site_url('pilihan/Kontak') ?>">Kontak</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= site_url('pilihan/index') ?>"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
    </ul>
  </div>
</nav>