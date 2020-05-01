

<?php $this->load->view("template_Guest/header.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>
  

<div class="container">
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

    <div class="row mt-5">
      <div class="col">
        <h3 class="text-center">Jadwal Dokter Klinik Bona</h3>
        <?php if (empty($plot)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama Dokter</th>
                        <th class="text-center" scope="col">Hari</th>
                        <th class="text-center" scope="col">Jam Mulai</th>
                        <th class="text-center" scope="col">Jam Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($plot as $pl) : ?>
                        <td class="text-center"><?= $pl['nama_dokter']; ?></td>
                        <td class="text-center"><?= $pl['hari']; ?></td>
                        <td class="text-center"><?= $pl['jam_mulai']; ?></td>
                        <td class="text-center"><?= $pl['jam_selesai']; ?></td>
                        <td class="text-center">
                                   
                         </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    
                </div>
            </div>
      </div>
    </div>
</div>


<div class="container">
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


    <div class="row mt-5">
      <div class="col">
        <h3 class="text-center">Pasien Rawat Inap</h3>
        <?php if (empty($rawat)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-6">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama Pasien</th>
                        <th class="text-center" scope="col">Nama Dokter</th>
                        <th class="text-center" scope="col">Deskripi Penyakit</th>
                        <th class="text-center" scope="col">Kamar</th>
                     

                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($rawat as $rw) : ?>
                        <td class="text-center"><?= $rw['nama_pasien']; ?></td>
                        <td class="text-center"><?= $rw['nama_dokter']; ?></td>
                        <td class="text-center"><?= $rw['deskripsi']; ?></td>
                        <td class="text-center"><?= $rw['nama_kamar']; ?></td>
                       
                        <td class="text-center">
                                    
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <div class="row mt-3">
                
            </div>
      </div>

</div>
<?php $this->load->view("template_Guest/footer.php") ?>
