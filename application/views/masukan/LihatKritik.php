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
            <h3 class="text-center">Daftar Kritik Pengunjung</h3>
            <?php if (empty($kritik)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama Tamu</th>
                        <th class="text-center" scope="col">Email Tamu</th>
                        <th class="text-center" scope="col">Kategori</th>
                        <th class="text-center" scope="col">Isi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($kritik as $kr) : ?>
                        <td class="text-center"><?= $kr['nama_tamu']; ?></td>
                        <td class="text-center"><?= $kr['email_tamu']; ?></td>
                        <td class="text-center"><?= $kr['kategori']; ?></td>
                        <td class="text-center"><?= $kr['isi']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>index.php/feedback/hapus/<?= $kr['id_feedback']?>/<?= $kr['kategori']?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <?php if (!empty($kritik)) : ?>
                        <a href="<?= base_url(); ?>index.php/feedback/hapusSemua/<?= $kr['kategori'] ?>" class="btn btn-primary">Hapus Semua</a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
<?php $this->load->view("template/footer.php") ?>