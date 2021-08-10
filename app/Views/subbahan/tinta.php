<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <i class="fas fa-plus-square"></i>
                <a class="btn btn-outline-info mt-2" href='/inputbutton/createTinta'>input data</a>
            </div>
            <div class="row-lg-12 mt-2">
                <?php if (session()->getFlashdata('saveTinta')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashData('saveTinta'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('deltinta')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashData('deltinta'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <table id="table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">id_Tinta</th>
                                <th scope="col">tanggal_pemesanan</th>
                                <th scope="col">Nama_Spl</th>
                                <th scope="col">Jenis_Tinta</th>
                                <th scope="col">Turunan_tinta</th>
                                <th scope="col">Jumlah_kaleng</th>
                                <th scope="col">harga_sebelum</th>
                                <th scope="col">harga_sesudah</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 1;
                            foreach ($tinta as $t) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $t['id_tinta']; ?></td>
                                    <td><?= $t['tanggal_pemesanan']; ?></td>
                                    <td><?= $t['Nama_Spl']; ?></td>
                                    <td><?= $t['Jenis_tinta']; ?></td>
                                    <td><?= $t['Turunan_tinta']; ?></td>
                                    <td><?= $t['Jumlah_kaleng']; ?></td>
                                    <td><?= $t['harga_sebelum']; ?></td>
                                    <td><?= $t['harga_sesudah']; ?></td>
                                    <td>
                                        <div class="col-md-4">
                                            <a href="<?php echo base_url('inputbutton/deletetinta/' . $t['id_tinta']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $t['Jenis_tinta']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                                            <a href="/supplier/editKertas" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        </div>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
</body>
<?= $this->endSection(); ?>