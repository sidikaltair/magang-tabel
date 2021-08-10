<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<body>

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <i class="fas fa-plus-square"></i>
                <a class="btn btn-outline-info mt-2" href='/inputbutton/createPlastik'>input data</a>
            </div>
            <div class="row-lg-12 mt-2">
                <?php if (session()->getFlashdata('saveplastik')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashData('saveplastik'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('delplas')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashData('delplas'); ?>
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
                                <th scope="col">id_Plastik</th>
                                <th scope="col">tanggal_pemesanan</th>
                                <th scope="col">Nama_pls</th>
                                <th scope="col">Jenis_pls</th>
                                <th scope="col">Jumlah_rol</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 1;
                            foreach ($plastik as $p) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $p['id_pls']; ?></td>
                                    <td><?= $p['tanggal_pemesanan']; ?></td>
                                    <td><?= $p['Nama_pls']; ?></td>
                                    <td><?= $p['Jenis_pls']; ?></td>
                                    <td><?= $p['Jumlah_rol']; ?></td>
                                    <td>
                                        <div class="div">
                                            <div class="row-g2">
                                                <!-- <a href="/supplier/deleteKertas"> <i class="fas fa-edit"></a> -->
                                                <a href="<?php echo base_url('inputbutton/deletepls/' . $p['id_pls']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $p['id_pls']; ?>ini?')"><i class="fas fa-trash-alt"></i></a>
                                                <!-- <div class="col"> -->
                                                <a href="/supplier/saveTinta" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto est ut possimus. Possimus facilis accusamus in dolorem necessitatibus esse reprehenderit alias quas pariatur veritatis illum adipisci accusantium, expedita aut cupiditate.</p> -->


            <!-- <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus possimus unde similique ullam consequuntur dicta enim natus quae tempora soluta, culpa totam minima minus assumenda atque deserunt mollitia, eos eaque? -->

</body>
<?= $this->endSection(); ?>