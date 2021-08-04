<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>
    <br><br>
    <form action="/Supplier/savePlastik" method="POST">

        <div class="form-group text-dark">
            <div class="row g-3">
                <div class="col-2">
                    <label for="id_plastik">1.id_plastik</label>
                    <input type="text" class="form-control" id="id_plastik" name="id_plastik" placeholder="id_kertas">
                </div>

                <div class="col-2">
                    <label for="tanggal_pemesanan">3.tanggal_pemesanan</label>
                    <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="Mass">
                </div>

                <div class="col-2">
                    <label for="created_at">4.created_at</label>
                    <input type="date" class="form-control" id="created_at" name="created_at" placeholder="Masukaas">
                </div>


                <div class="col-3">
                    <label for="Nama_pls">2.Nama_Pls</label>
                    <input type="text" class="form-control" id="Nama_pls" name="Nama_pls" placeholder="Masas">
                </div>

                <div class="col-3">
                    <label for="Jenis_pls">5.Jenis_pls</label>
                    <input type="text" class="form-control" id="Jenis_pls" name="Jenis_pls" placeholder="Masuertas">
                </div>

                <div class="col-2">
                    <label for="Jumlah_rol">6.Jumlah_rol</label>
                    <input type="text" class="form-control" id="Jumlah_rol" name="Jumlah_rol" placeholder="yaia">
                </div>

            </div>
            <div class="row mt-3"></div>
            <div class="col-2">
                <label for="submit">7.submit</label>
                <input type="submit" class="btn btn-primary" id="submit" name="submit" placeholder="Masrtas">
            </div>

        </div>

    </form>
</body>

<?= $this->endSection(); ?>