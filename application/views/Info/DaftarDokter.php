<?php $this->load->view("template/header_pasien.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>
<style type="text/css">
  body{
    background: url("<?php echo base_url()?>assets/dokter7.jpg") no-repeat;
  }
  h1{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
  }
   .footer {
    position: static;
    width: 100%;
    height: 60px;
    line-height: 60px;
    background-color: #f5f5f5;
    text-align: center;
    margin-top: 40%;
  }
  table    { border:ridge 1px black; background-color:#C0C0C0; color:black; }
  table td { border:inset 1px black; }
</style>

<h1 style="text-align: center;">Daftar Dokter Di Klinik Bona</h1>

<div class="container">
  <div class="col md-6">
    <form id="form-search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari dokter ... " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
      </div>
    </form>
  </div>
  <table class="table table-dark,table-responsive">
    <thead>
      <tr>
          <th class="text-center" scope="col">No</th>
          <th class="text-center" scope="col">Nama</th>
          <th class="text-center" scope="col">Alamat</th>
          <th class="text-center" scope="col">Kontak</th>
      </tr>
    </thead>
    <tbody id="target-perawat">

    </tbody>
  </table>
  <!-- <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('pasien/TambahPasien') ?>" class="btn btn-primary">Lihat Jadwal Dokter</a>
                </div>
  </div> -->
</div>
<script type="text/javascript">

   ambilData();
    function ambilData() {
        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>index.php/dokter/LihatDokter',
            dataType:'json',
            success: function(data){
                var baris='';
               for (var i=0; i<data.data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data.data[i].nama_dokter+'</td>'+
                                '<td>'+data.data[i].alamat+'</td>'+
                                '<td>'+data.data[i].kontak+'</td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                }
                $('#target-perawat').html(baris);
            }

        });
    }


     $('#form-search').on('submit', (e) => {
        e.preventDefault();
        $.ajax({
                    type:'POST',
                    url:'<?php echo base_url()?>index.php/dokter/searchHandle',
                    data: $('#form-search').serialize(),
                    dataType:'json',
                    success: function(data){
                        var baris='';
                       for (var i=0; i<data.data.length; i++) {
                            baris += '<tr>'+
                                        '<td>'+(i+1)+'</td>'+
                                        '<td>'+data.data[i].nama_dokter+'</td>'+
                                        '<td>'+data.data[i].alamat+'</td>'+
                                        '<td>'+data.data[i].kontak+'</td>'+
                                    '</tr>'

        // onclick="ubahdata('+data[i].id_pasien+')"        

                        }
                        $('#target-perawat').html(baris);

                    }

        });
    });
</script>
<?php $this->load->view("template_Guest/footer.php") ?>
