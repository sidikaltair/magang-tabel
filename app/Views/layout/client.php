<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <table id="table" class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No ID</th>
                        <th scope="col">NAMA CLIENT</th>
                        <th scope="col">NAMA BARANG</th>
                        <th scope="col">SISA/STOK BARANG</th>
                        <th scope="col">JUMLAH BARANG</th>
                        <th scope="col">AREA KIRIM</th>
                        <th scope="col">TANGGAL KIRIM</th>
                        <th scope="col">TOTAL HARGA</th>
                        <th scope="col">TOTAL HARGA</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($client as $c) {
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $c['no_id']; ?></td>
                            <td><?= $c['nama_client']; ?></td>
                            <td><?= $c['nama_barang']; ?></td>
                            <td><?= $c['stok_gudang']; ?></td>
                            <td><?= $c['jumlah_barang']; ?></td>
                            <td><?= $c['area_kirim']; ?></td>
                            <td><?= $c['tanggal_kirim']; ?></td>
                            <td><?= $c['total_harga']; ?></td>
                            <td>
                                <div class="div">
                                    <div class="row-g2">
                                        <!-- <a href="/supplier/deleteKertas"> <i class="fas fa-edit"></a> -->
                                        <a href="<?php echo base_url('home/client/' . $c['no_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $c['no_id']; ?>ini?')"><i class="fas fa-trash-alt"></i></a>
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