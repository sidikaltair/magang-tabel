<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<body>

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
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">id_Plastik</th>
                                    <th scope="col">tanggal_pemesanan</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">Nama_pls</th>
                                    <th scope="col">Jenis_pls</th>
                                    <th scope="col">Jumlah_rol</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i = 1;
                                foreach ($kertas as $k) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $k['id_kertas']; ?></td>
                                        <td><?= $k['tanggal_pemesanan']; ?></td>
                                        <td><?= $k['created_at']; ?></td>
                                        <td><?= $k['Nama_krts']; ?></td>
                                        <td><?= $k['Jenis_ivo']; ?></td>
                                        <td><?= $k['jumlah_rim']; ?></td>
                                        <td><?= $k['ukuran']; ?></td>
                                        <td><?= $k['gramature']; ?></td>

                                    </tr>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto est ut possimus. Possimus facilis accusamus in dolorem necessitatibus esse reprehenderit alias quas pariatur veritatis illum adipisci accusantium, expedita aut cupiditate.</p> -->
    </body>

    <!-- <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus possimus unde similique ullam consequuntur dicta enim natus quae tempora soluta, culpa totam minima minus assumenda atque deserunt mollitia, eos eaque? -->

</body>
<?= $this->endSection(); ?>