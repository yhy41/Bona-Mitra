<?php $this->load->view("template/header_pasien.php") ?>
<?php $this->load->view("template/navbar.php") ?>

            <!-- form dari input edit hapus dan lihat dari pasien -->

<div class="container">
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
        
    <div class="row mt-3">
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
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Pasien</h3>
            
             <br>
                <a href="#form" data-toggle="modal" class="btn btn-primary">tambah data</a>
            </br>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NoId</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Tanggal_Lahir</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Kontak</th>
                        <th class="text-center" scope="col">Update</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="target-pasien">
                    
                </tbody>
            </table><div class="modal fade" id="form" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Pasien</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Nama Paseine</td>
                                <td><input type="text" name="nama_pasien" placeholder="input_pasien" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><input type="text" name="tanggal_lahir" placeholder="input_pasien" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" placeholder="input_pasien" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" placeholder="input_pasien" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td><input type="text" name="kontak" placeholder="input_pasien" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" id="btn-tambah" onclick="TambahPasien()"  class="btn-primary">Tamnbah</button>

                                    <button type="button" data-dismiss="modal" class="btn-primary">Batal</button>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>



            <!-- MODAL EDIT -->
        <div class="modal fade" id="formUbah" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Pasien</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Nama Paseine</td>
                                <td><input type="text" name="nama_pasien1" placeholder="input_pasien" class="form-control"  id="nama_pasien"/>
                                    <input type="text" name="id_pasien1" value="" readonly/>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><input type="text" name="tanggal_lahir1" placeholder="input_pasien" class="form-control" id="tanggal_lahir" /></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat1" placeholder="input_pasien" class="form-control" id="alamat" /></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email1" placeholder="input_pasien" class="form-control" id="email" /></td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td><input type="text" name="kontak1" placeholder="input_pasien" class="form-control"  id="kontak" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" id="btn-ubah" onclick="inputUpdate()" class="btn-primary">Ubah</button>

                                   
                                    <button type="button" data-dismiss="modal" class="btn-primary">Batal</button>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        <!--END MODAL EDIT-->

           
                      
        </div>
    </div>
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
                                '<td><a href="#formUbah"  data-toggle="modal" class="btn btn-primary buttonubah" id="'+data.data[i].id_pasien+'">ubah</a>     </td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data.data[i].id_pasien+'">hapus</a></td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                }
                $('#target-pasien').html(baris);
                $('.buttonubah').on('click',ubahdata);
                $('.buttonhapus').on('click',HapusData);


            }

        });
    }

    function TambahPasien(){
        $('.alert-success').hide();
        $('.alert-danger').hide();

        var nama_pasien =$("[name='nama_pasien']").val();
        var tanggal_lahir =$("[name='tanggal_lahir']").val();
        var alamat =$("[name='alamat']").val();
        var email =$("[name='email']").val();
        var kontak =$("[name='kontak']").val();


        $.ajax({
            type:'POST',
            data:'nama_pasien='+nama_pasien+'&tanggal_lahir='+tanggal_lahir+'&alamat='+alamat+'&email='+email+'&kontak='+kontak,
            url:'<?php echo base_url().'index.php/pasien/TambahPasien' ?>',
            dataType:'json',
            success:function(hasil){
           
            if(hasil.status) {
                    $("#form").modal('hide');
                    ambilData();
                    
                $('.alert-success').html(hasil.message);
                $('.alert-success').show();

                
                $("[name='nama_pasien']").val('');
                $("[name='tanggal_lahir']").val('');
                $("[name='alamat']").val('');
                $("[name='email']").val('');
                $("[name='kontak']").val('');
            }else{

                $("#form").modal('hide');
                    ambilData();

                $('.alert-danger').html(hasil.message);
                $('.alert-danger').show();
                }
            }
        });

    }

        // ambil id dari database
    function ubahdata(){
       

      var id_pasien=$(this).attr("id");

      // var id_pasien=$(this).prev().prev().prev().prev().prev().prev().html();

         $.ajax({
            type:'POST',
            data:{id_pasien:id_pasien},
            url:'<?php echo base_url().'index.php/pasien/AmbilId' ?>',
            dataType:'json',
            success: function(hasil){
                
                // console.log(hasil);
                $('[name="id_pasien1"]').val(hasil.id_pasien);
                $('[name="nama_pasien1"]').val(hasil.nama_pasien);
                $('[name="tanggal_lahir1"]').val(hasil.tanggal_lahir);
                $('[name="alamat1"]').val(hasil.alamat);
                $('[name="email1"]').val(hasil.email);
                $('[name="kontak1"]').val(hasil.kontak);
            }
         });
    }




    function inputUpdate(){
        $('.alert-success').hide();
        $('.alert-danger').hide();

        var id_pasien =$("[name='id_pasien1']").val();
        var nama_pasien =$("[name='nama_pasien1']").val();
        var tanggal_lahir =$("[name='tanggal_lahir1']").val();
        var alamat =$("[name='alamat1']").val();
        var email =$("[name='email1']").val();
        var kontak =$("[name='kontak1']").val();

        $.ajax({
            type:'POST',
             data:'id_pasien='+id_pasien+'&nama_pasien='+nama_pasien+'&tanggal_lahir='+tanggal_lahir+'&alamat='+alamat+'&email='+email+'&kontak='+kontak,
             url:'<?php echo base_url().'index.php/pasien/UbahPasien' ?>',
             dataType:'json',
             success:function(hasil){
                    if(hasil.status) {
                         $("#formUbah").modal('hide');
                        ambilData();
                        $('.alert-success').html(hasil.message);
                        $('.alert-success').show();
                    }else{
                             $("#formUbah").modal('hide');
                                ambilData();
                        $('.alert-danger').html(hasil.message);
                        $('.alert-danger').show();
                    }
            }
        });
    }



    function HapusData() {
        var tanya = confirm('apakaha antum yakin menghapus data ini ???');
        var id_pasien=$(this).attr("id");
    if(tanya){
        $.ajax({
            type:'POST',
            data :{id_pasien:id_pasien},
            url:'<?php echo base_url().'index.php/pasien/HapusPasien' ?>',
            success:function(){
                ambilData();

            }
        });
    } 

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
                                '<td><a href="#formUbah"  data-toggle="modal" class="btn btn-primary buttonubah" id="'+data.data[i].id_pasien+'">ubah</a>     </td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data.data[i].id_pasien+'">hapus</a></td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                    }
                        $('#target-pasien').html(baris);
                        $('.buttonubah').on('click',ubahdata);
                        $('.buttonhapus').on('click',HapusData);


                    }

        });
    });

</script>



<?php $this->load->view("template/footer_pasien.php") ?>

