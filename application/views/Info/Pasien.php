<?php $this->load->view("template/header_pasien.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>

<style type="text/css">
    body{
      background: url("<?php echo base_url()?>assets/logo1.jpg") no-repeat;
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
  </style>

<h1 style="text-align: center;">Daftar Pasien Di Klinik Bona</h1>

<div class = "container">
  <div class="col md-6">
    <form id="form-search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Pasien ... " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
      </div>
    </form>
  </div>
 

  <table class="table table-dark,table-responsive">
    <thead>
      <tr>
          <th class="text-center" scope="col">NO</th>
          <th class="text-center" scope="col">Nama</th>
          <th class="text-center" scope="col">Tanggal Lahir</th>
          <th class="text-center" scope="col">Alamat</th>
          <th class="text-center" scope="col">Email</th>
          <th class="text-center" scope="col">Kontak</th>
      </tr>
    </thead>
    <tbody id="target-pasien">
      
    </tbody>
  </table>

</div>
<script type="text/javascript">
  
    ambilData();
    function ambilData() {
        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>index.php/pasien/LihatPasien',
            dataType:'json',
            success: function(data){
                var baris='';
               for (var i=0; i<data.data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data.data[i].nama_pasien+'</td>'+
                                '<td>'+data.data[i].tanggal_lahir+'</td>'+
                                '<td>'+data.data[i].alamat+'</td>'+
                                '<td>'+data.data[i].email+'</td>'+
                                '<td>'+data.data[i].kontak+'</td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                }
                $('#target-pasien').html(baris);

            }

        });
    }

    $('#form-search').on('submit', (e) => {
        e.preventDefault();
        $.ajax({
                    type:'POST',
                    url:'<?php echo base_url()?>index.php/pasien/searchHandle',
                    data: $('#form-search').serialize(),
                    dataType:'json',
                    success: function(data){
                        var baris='';
                       for (var i=0; i<data.data.length; i++) {
                            baris += '<tr>'+
                                        '<td>'+(i+1)+'</td>'+
                                        '<td>'+data.data[i].nama_pasien+'</td>'+
                                        '<td>'+data.data[i].tanggal_lahir+'</td>'+
                                        '<td>'+data.data[i].alamat+'</td>'+
                                        '<td>'+data.data[i].email+'</td>'+
                                        '<td>'+data.data[i].kontak+'</td>'+
                                    '</tr>'

        // onclick="ubahdata('+data[i].id_pasien+')"        

                        }
                        $('#target-pasien').html(baris);

                    }

        });
    });

</script>
<?php $this->load->view("template_Guest/footer.php") ?>