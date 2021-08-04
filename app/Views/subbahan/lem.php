<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <i class="fas fa-plus-square"></i>
                <a class="btn btn-outline-info mt-2" href='/inputbutton/create'>input data</a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <table id="table" class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">id_lem</th>
                                <th scope="col">tanggal_pemesanan</th>
                                <th scope="col">created_at</th>
                                <th scope="col">Nama_lem</th>
                                <th scope="col">jumlah_drum</th>
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
                                    <td><?= $l['created_at']; ?></td>
                                    <td><?= $l['Nama_lem']; ?></td>
                                    <td><?= $l['jumlah_drum']; ?></td>


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