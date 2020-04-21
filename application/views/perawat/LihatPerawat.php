<?php $this->load->view("template/header_pasien.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<div class="container">
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

    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Perawat ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Perawat</h3>
            <br>
                <a href="#form" data-toggle="modal" class="btn btn-primary" onclick="submit('tambah')">tambah data</a>
            </br>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <!-- <th class="text-center" scope="col">NoId</th> -->
                        <th class="text-left" scope="col">No</th>
                        <th class="text-left" scope="col">Nama</th>
                        <th class="text-left" scope="col">Alamat</th>
                        <th class="text-left" scope="col">Kontak</th>
                        <th class="text-left" scope="col">Update</th>
                        <th class="text-left" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="target-perawat">
                    
                </tbody>
            </table><div class="modal fade" id="form" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Perawat</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Nama Perawat</td>
                                <td><input type="text" name="nama_perawat" placeholder="input_nama" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" placeholder="input_alamat" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td><input type="text" name="kontak" placeholder="input_kontak" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" id="btn-tambah" onclick="TambahPerawat()"  class="btn-primary">Tamnbah</button>

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
                            <h1>Data Perawat</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Nama Perawat</td>
                                <td><input type="text" name="nama_perawat1" placeholder="input_nama" class="form-control"  id="nama_pasien"/>
                                    <input type="text" name="id_perawat1" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat1" placeholder="input_pasien" class="form-control" id="alamat" /></td>
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
            url:'<?php echo base_url()?>index.php/perawat/LihatPerawat',
            dataType:'json',
            success: function(data){
                var baris='';
               for (var i=0; i<data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data[i].nama_perawat+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
                                '<td>'+data[i].kontak+'</td>'+
                                '<td><a href="#formUbah"  data-toggle="modal" class="btn btn-primary buttonubah" id="'+data[i].id_perawat+'">ubah</a>     </td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data[i].id_perawat+'">hapus</a></td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                }
                $('#target-perawat').html(baris);
                $('.buttonubah').on('click',ubahdata);
                $('.buttonhapus').on('click',HapusData);


            }

        });
    }

    function TambahPerawat(){
        
        $('.alert-success').hide();
        $('.alert-danger').hide();
        var nama_perawat =$("[name='nama_perawat']").val();
        var alamat =$("[name='alamat']").val();
        var kontak =$("[name='kontak']").val();


        $.ajax({
            type:'POST',
            data:'nama_perawat='+nama_perawat+'&alamat='+alamat+'&kontak='+kontak,
            url:'<?php echo base_url().'index.php/perawat/TambahPerawat' ?>',
            dataType:'json',
            success:function(hasil){
                $("#pesan").html(hasil.pesan);
                // console.log(hasil);

                if(hasil.status) {
                    $("#form").modal('hide');
                    ambilData();

                $('.alert-success').html(hasil.message);
                $('.alert-success').show();

                $("[name='nama_perawat']").val('');
                $("[name='alamat']").val('');
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

      var id_perawat=$(this).attr("id");

      // var id_pasien=$(this).prev().prev().prev().prev().prev().prev().html();

         $.ajax({
            type:'POST',
            data:{id_perawat:id_perawat},
            url:'<?php echo base_url().'index.php/perawat/AmbilIdPerawat' ?>',
            dataType:'json',
            success: function(hasil){
                
                // console.log(hasil);
                $('[name="id_perawat1"]').val(hasil.id_perawat);
                $('[name="nama_perawat1"]').val(hasil.nama_perawat);
                $('[name="alamat1"]').val(hasil.alamat);
                $('[name="kontak1"]').val(hasil.kontak);
            }
         });
    }




    function inputUpdate(){
        $('.alert-success').hide();
        $('.alert-danger').hide();

        var id_perawat =$("[name='id_perawat1']").val();
        var nama_perawat =$("[name='nama_perawat1']").val();
        var alamat =$("[name='alamat1']").val();
        var kontak =$("[name='kontak1']").val();

        $.ajax({
            type:'POST',
             data:'id_perawat='+id_perawat+'&nama_perawat='+nama_perawat+'&alamat='+alamat+'&kontak='+kontak,
             url:'<?php echo base_url().'index.php/perawat/UbahPerawat' ?>',
             dataType:'json',
             success:function(hasil){
                 $("#pesan").html(hasil.pesan);
                console.log(hasil);

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
        var id_perawat=$(this).attr("id");
    if(tanya){
        $.ajax({
            type:'POST',
            data :{id_perawat:id_perawat},
            url:'<?php echo base_url().'index.php/perawat/HapusPerawat' ?>',
            success:function(){
                ambilData();

            }
        });
    } 

    }


</script>

<?php $this->load->view("template/footer_pasien.php") ?>
