<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<br><br>

<body>
    <form action="/Supplier/save" method="POST">

        <div class="form-group text-dark">
            <div class="row g-3">
                <div class="col-2">
                    <label for="id_kertas">1.id_kertas</label>
                    <input type="text" class="form-control" id="id_kertas" name="id_kertas" placeholder="id_kertas">
                </div>

                <div class="col-3">
                    <label for="Nama_kertas">2.Nama_kertas</label>
                    <input type="text" class="form-control" id="Nama_kertas" name="Nama_kertas" placeholder="Masas">
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
                    <label for="Jenis_ivo">5.Jenis_ivo </label>
                    <input type="text" class="form-control" id="Jenis_ivo" name="Jenis_ivo" placeholder="Masuertas">
                </div>

                <div class="col-2">
                    <label for="Jumlah_rim">6.Jumlah_Rim</label>
                    <input type="text" class="form-control" id="Jumlah_rim" name="Jumlah_rim" placeholder="M">
                </div>

                <div class="col-2">
                    <label for="ukuran">7.ukuran</label>
                    <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Masrtas">
                </div>
                <div class="col-2">
                    <label for="gramature">7.gramature</label>
                    <input type="text" class="form-control" id="gramature" name="gramature" placeholder="Masrtas">
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
<!-- end document-->
<?= $this->endSection(); ?>