<?php $this->load->view("template/header_home.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>
 
 

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Selamat Datang di Klinik Bona!</h1>
      <p>Kami adalah Klinik Bona</p>
      <p><a class="btn btn-primary btn-lg" href="<?= site_url('pilihan/Kontak') ?>" role="button">Contact Us »</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <h1 >Tentang Kami</h1>

	<div class="map">
	            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31805.719324237172!2d104.87867138047012!3d-4.818935012000646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e38a8c34478c437%3A0xf70e2cc30246368!2sKotabumi%2C%20North%20Lampung%20Regency%2C%20Lampung!5e0!3m2!1sen!2sid!4v1587803077296!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<div class = "container bg-dark text-white">
	  <h1>Kami adalah klinik bona yang dibentuk untuk melayani masyarakat tanpa pamrih</h1>
	  <h1>Klinik ini berdiri pada tahun 2020 karena tuntutan tugas dari dosen mata kuliah pemrograman web</h1>
	</div>

    <div class="row">
      <div class="col-md-4">
        <h2>Dokter</h2>
        <p>Klinik kami diisi dengan dokter-dokter berkualitas lulusan perguruan tinggi ternama dari berbagai belahan dunia</p>
        <p><a class="btn btn-secondary" href="<?= site_url('dokter/indexinfo') ?>" role="button">Lihat »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Pasien</h2>
        <p>Klinik kami memprioritaskan pengunjung sebagai prioritas utama guna menyenangkan hati pengunjung sehingga pengunjung dapat sakit lagi di kemudian hari dan kembali ke klinik kami</p>
        <p><a class="btn btn-secondary" href="<?= site_url('pasien/indexinfo') ?>" role="button">Lihat »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Perawat</h2>
        <p>Klinik kami juga diisi dengan perawat-perawat yang terbaik dari kampung halamannya</p>
        <p><a class="btn btn-secondary" href="<?= site_url('perawat/indexinfo') ?>" role="button">View details »</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

<?php $this->load->view("template_Guest/footer.php") ?>