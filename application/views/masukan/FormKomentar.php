<?php $this->load->view("template/header_home.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>


    <!-- isi -->

<div class="container">
  <h2>Feedback Dari Anda Sangat Berharga Bagi Klinik Kami</h2>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible" role="alert" style="display: none">
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger alert-dismissible" role="alert" style="display: none">
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
  <form id="form-saran">
    <div class="form-group">
      <label for="email">Nama :</label>
      <input type="input" class="form-control" id="email" placeholder="Enter nama" name="nama_tamu">
    </div>
    <div class="form-group">
      <label for="pwd">Kategori :</label>
      <select class="form-control" name="kategori">
        <option value="">Pilih Kategori</option>
        <option value="Saran">Saran</option>
        <option value="Kritik">Kritik</option>
        <option value="Komentar">Komentar</option>
      </select>
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
    <button type="submit" class="btn-primary">Tamnbah</button>

<script type="text/javascript">
  $('#form-saran').on('submit', (e) => {
        e.preventDefault();
        
        $('.alert-success').hide();
        $('.alert-danger').hide();

        $.ajax({
            type:'POST',
            data: $('#form-saran').serialize(),
            url:'<?php echo base_url().'index.php/Input_Masukan/feedback' ?>',
            dataType:'json',
            success:function(hasil){
                if(hasil.status) {
                  $('.alert-success').html(hasil.message);
                  $('.alert-success').show();
                  
                  $("[name='nama_tamu']").val('');
                  $("[name='kategori']").val('');
                  $("[name='email_tamu']").val('');
                  $("[name='isi']").val('');
                } else {
                  $('.alert-danger').html(hasil.message);
                  $('.alert-danger').show();
                }
            }
        });

    });
</script>
<?php $this->load->view("template/footer_pasien.php") ?>
