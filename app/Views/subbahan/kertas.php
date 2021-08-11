<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<br><br>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <i class="fas fa-plus-square"></i>
                <a class="btn btn-outline-info" href='/inputbutton/create'>input data</a>

            </div>
            <div class="row-lg-12 mt-2">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashData('pesan'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('warning')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashData('warning'); ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <div class="table-responsive-sm">

                        <table id="table" class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">id_kertas</th>
                                    <th scope="col">tanggal_pemesanan</th>
                                    <th scope="col">Nama_krts</th>
                                    <th scope="col">Jenis_ivo</th>
                                    <th scope="col">Jumlah_rim</th>
                                    <th scope="col">ukuran</th>
                                    <th scope="col">HARGA SEBELUM</th>
                                    <th scope="col">Harga sesudah ppn</th>
                                    <th scope="col">gramature</th>
                                    <th scope="col">Action</th>

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
                                        <td><?= $k['Nama_krts']; ?></td>
                                        <td><?= $k['Jenis_ivo']; ?></td>
                                        <td><?= $k['jumlah_rim']; ?></td>
                                        <td><?= $k['ukuran']; ?></td>
                                        <td><?= $k['harga_sebelum']; ?></td>
                                        <td><?= $k['harga_sesudah']; ?></td>
                                        <td><?= $k['gramature']; ?></td>
                                        <td>
                                            <div class="row-g2">

                                                <a href=" <?php echo base_url('inputbutton/deletekrts/' . $k['id_kertas']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $k['Nama_krts']; ?>ini?')"><i class="fas fa-trash-alt"></i></a>

                                                <a href=" <?php echo base_url('supplier/pdf/' . $k['id_kertas']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin cetak pdf <?php echo $k['Nama_krts']; ?>ini?')"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                    </div>

                </div>
            </div>
            </td>
            </tr>
        </div>
    </div>

<?php
                                }
?>

</tbody>
</table>
</div>
</div>
<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto est ut possimus. Possimus facilis accusamus in dolorem necessitatibus esse reprehenderit alias quas pariatur veritatis illum adipisci accusantium, expedita aut cupiditate.</p> -->
</body>

</html>
<?= $this->endSection(); ?>