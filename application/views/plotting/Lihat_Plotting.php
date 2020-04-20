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

    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari plotting Dokter ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
    	<div class="col">
    		<h3 class="text-center">Plotting Dokter</h3>
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
                            <a href="<?= base_url(); ?>index.php/plotting/hapus/<?= $pl['id_plotting'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>            
                         </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('plotting/PilihDokter') ?>" class="btn btn-primary">Input Plotting Dokter</a>
                </div>
            </div>
    	</div>
    </div>
</div>