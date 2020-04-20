<?php $this->load->view("template_Guest/header.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>
<style type="text/css">
  body{
      background: url("<?php echo base_url()?>assets/rs1.jpg") no-repeat;
      background-size: 100%;
    }
  h2{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
    }
</style>

    <!-- isi -->

<div class="container">
  <h2>Feedback Dari Anda Sangat Berharga Bagi Klinik Kami</h2>
  <?php if ($this->session->flashdata('info')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible show" role="alert">
                <?= $this->session->flashdata('info'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
  <form action="<?= site_url('Input_Masukan/feedback') ?>" method="post">
    <div class="form-group">
      <label for="email">Nama :</label>
      <input type="input" class="form-control" id="email" placeholder="Enter nama" name="nama_tamu">
    </div>
    <div class="form-group">
      <label for="pwd">Kategori :</label>
      <div class="form-check-inline">
        <?= form_radio('kategori','Saran','true', ['class'=>'form-check-input']) ?>
        Saran
      </div>
      <div class="form-check-inline">
        <?= form_radio('kategori','Kritik','', ['class'=>'form-check-input']) ?>
        Kritik
      </div>
      <div class="form-check-inline">
        <?= form_radio('kategori','Komentar','', ['class'=>'form-check-input']) ?>
        Komentar
      </div>
      <!-- <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a id="Saran" name="kategori" value="Saran">Saran</a></li>
            <li><a id="Komentar" name="kategori" value="Komentar" >Komentar</a></li>
            <li><a id="Kritik" name="kategori" value="Kritik">Kritik</a></li>
        </ul>
      </div> -->
    </div>
  
    <div class="form-group">
      <label for="pwd">Email :</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="email_tamu">
    </div>
    <div class="form-group">
      <label for="comment">Masukan yang ingin anda sampaikan :</label>
      <textarea class="form-control" rows="5" id="Saran" name="isi"></textarea>
    </div>
    <div class="checkbox">
      <label style="color: red;"><input type="checkbox" name="Pernyataan"><b>saya menyatakan ini dengan Kondisi Normal</b> </label>
    </div>
    <button type="submit" class="btn btn-default">Kirim</button>

<?php $this->load->view("template_Guest/footer.php") ?>
