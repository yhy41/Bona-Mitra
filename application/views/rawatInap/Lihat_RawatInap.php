<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

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
    		<h3 class="text-center">Riwayat Rawat Inap</h3>
    		<?php if (empty($rawat)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari riwayat Rawat Inap ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>

            <table class="table mt-6">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama Pasien</th>
                        <th class="text-center" scope="col">Nama Dokter</th>
                        <th class="text-center" scope="col">Deskripi Penyakit</th>
                        <th class="text-center" scope="col">Kamar</th>
                        <th class="text-center" scope="col">Tanggal Masuk</th>
                        <th class="text-center" scope="col">Tanggal Keluar</th>

                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($rawat as $rw) : ?>
                        <td class="text-center"><?= $rw['nama_pasien']; ?></td>
                        <td class="text-center"><?= $rw['nama_dokter']; ?></td>
                        <td class="text-center"><?= $rw['deskripsi']; ?></td>
                        <td class="text-center"><?= $rw['nama_kamar']; ?></td>
                        <td class="text-center"><?= $rw['tanggal_masuk']; ?></td>
                        <td class="text-center"><?= $rw['tanggal_keluar']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>index.php/rawatInap/hapus/<?= $rw['id_rawat_inap'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>            
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('rawatInap/PilihPemeriksaan') ?>" class="btn btn-primary">Input Rawat Inap</a>
                </div>
            </div>
    	</div>

</div>
<?php $this->load->view("template/footer_pasien.php") ?>