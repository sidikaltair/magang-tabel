<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>
    <br><br>
    <form action="/Supplier/saveLem" method="POST">

        <div class="form-group text-dark">
            <div class="row g-3">
                <div class="col-2">
                    <label for="id_lem">1.id_lem</label>
                    <input type="text" class="form-control" id="id_lem" name="id_lem" placeholder="id_kertas">
                </div>

                <div class="col-2">
                    <label for="tanggal_pemesanan">2.tanggal_pemesanan</label>
                    <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="Mass">
                </div>


                <div class="col-3">
                    <label for="Nama_lem">3.Nama_lem</label>
                    <input type="text" class="form-control" id="Nama_lem" name="Nama_lem" placeholder="Masas">
                </div>

                <div class="col-3">
                    <label for="jumlah_drum">4.jumlah_drum</label>
                    <input type="text" class="form-control" id="jumlah_drum" name="jumlah_drum" placeholder="Masuertas">
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