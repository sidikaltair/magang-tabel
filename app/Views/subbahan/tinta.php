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
                                <th scope="col">id_Tinta</th>
                                <th scope="col">tanggal_pemesanan</th>
                                <th scope="col">created_at</th>
                                <th scope="col">Nama_Spl</th>
                                <th scope="col">Jenis_Tinta</th>
                                <th scope="col">Turunan_tinta</th>
                                <th scope="col">Jumlah_kaleng</th>

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
                                    <td><?= $t['created_at']; ?></td>
                                    <td><?= $t['Nama_Spl']; ?></td>
                                    <td><?= $t['Jenis_tinta']; ?>1</td>
                                    <td><?= $t['Turunan_tinta']; ?></td1>
                                    <td><?= $t['Jumlah_kaleng']; ?></td1>
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