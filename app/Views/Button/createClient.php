<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<br><br>

<body>


    <form action="/home/saveClient" method="POST">

        <div class="form-group text-dark">
            <div class="row g-3">
                <div class="col-2">
                    <label for="np_id">1.np_id</label>
                    <input type="text" class="form-control" id="id_tinta" name="id_tinta" value="JRD<?php echo sprintf("%04s", $no_id) ?>" placeholder="id_kertas">
                </div>

                <div class="col-3">
                    <label for="nama_client">2.nama_client</label>
                    <input type="date" class="form-control" id="nama_client" name="nama_client" placeholder="Masas">
                </div>

                <div class="col-2">
                    <label for="nama_barang">3.nama_barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Mass">
                </div>
                <div class="col-2">
                    <label for="stok_gudang">4.stok_gudang</label>
                    <input type="text" class="form-control" id="stok_gudang" name="stok_gudang" placeholder="Mass">
                </div>


                <div class="col-3">
                    <label for="jumlah_gudang">5.jumlah_gudang </label>
                    <input type="text" class="form-control" id="jumlah_gudang" name="jumlah_gudang" placeholder="Masuertas">
                </div>

                <div class="col-2">
                    <label for="jumlah_barang">6.jumlah_barang</label>
                    <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="M">
                </div>


                <div class="col-2">
                    <label for="area_kirim">7.area_kirim</label>
                    <input type="text" class="form-control" id="area_kirim" name="area_kirim" placeholder="Masrtas">
                </div>

                <div class="col-2">
                    <label for="tanggal_kirim">8.tanggal_kirim</label>
                    <input type="text" class="form-control" id="tanggal_kirim" name="tanggal_kirim" placeholder="Masrtas">
                </div>

                <div class="col-2">
                    <label for="total_harga">8.total_harga</label>
                    <input type="text" class="form-control" id="total_harga" name="total_harga" placeholder="Masrtas">
                </div>

            </div>

            <div class="div">



            </div>
            <div class="row mt-3"></div>
            <div class="col-2">
                <label for="submit">7.submit</label>
                <input type="submit" class="btn btn-primary" id="submit" name="submit" placeholder="Masrtas">
            </div>

        </div>

    </form>
</body>
<!-- end document-->
<?= $this->endSection(); ?>