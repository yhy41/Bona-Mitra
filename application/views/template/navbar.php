<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= site_url('pilihan/InformasiKlinikAdmin') ?>">Klinik Bona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= site_url('pilihan/Home_admin')?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Input Data<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pasien/index') ?>">Input Data Pasien</a></li>
          <li><a href="<?= site_url('dokter/index') ?>">Input Data Dokter</a></li>
          <li><a href="<?= site_url('perawat/index') ?>">Input Data Perawat</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Aktivitas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pemeriksaan/index') ?>">Pemeriksaan Pasien</a></li>
          <li><a href="<?= site_url('rawatInap/index') ?>">Rawat Inap</a></li>
          <li><a href="<?= site_url('plotting/index') ?>">Plotting Dokter</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kelola<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('jadwal/index') ?>">Jadwal Dokter</a></li>
          <li><a href="<?= site_url('kamar/index') ?>">Kamar</a></li>
          <li><a href="<?= site_url('feedback/indexsaran') ?>">Lihat Saran</a></li>
          <li><a href="<?= site_url('feedback/indexkomentar') ?>">Lihat Komentar</a></li>
           <li><a href="<?= site_url('feedback/indexkritik') ?>">Lihat Kritik</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= site_url('pilihan/masuk') ?>"><span class="glyphicon glyphicon-user"></span> Ganti Akun</a></li>
      <li><a href="<?= site_url('pilihan/index') ?>"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
  </div>
</nav>