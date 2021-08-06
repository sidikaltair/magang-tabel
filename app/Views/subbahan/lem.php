<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <i class="fas fa-plus-square"></i>
                <a class="btn btn-outline-info mt-2" href='/inputbutton/createLem'>input data</a>
            </div>
            <div class="row-lg-12 mt-2">
                <?php if (session()->getFlashdata('saveLem')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashData('saveLem'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('dellem')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashData('dellem'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <table id="table" class="table table-striped table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">id_lem</th>
                                <th scope="col">tanggal_pemesanan</th>
                                <th scope="col">Nama_lem</th>
                                <th scope="col">jumlah_drum</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 1;
                            foreach ($lem as $l) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $l['id_lem']; ?></td>
                                    <td><?= $l['tanggal_pemesanan']; ?></td>
                                    <td><?= $l['Nama_lem']; ?></td>
                                    <td><?= $l['jumlah_drum']; ?></td>
                                    <td>
                                        <div class="div">
                                            <div class="row-g2">
                                                <!-- <a href="/supplier/deleteKertas"> <i class="fas fa-edit"></a> -->
                                                <a href="<?php echo base_url('inputbutton/deletelem/' . $l['id_lem']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $l['id_lem']; ?>ini?')"><i class="fas fa-trash-alt"></i></a>
                                                <!-- <div class="col"> -->
                                                <!-- <a href="/supplier/deletepls" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a> -->
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