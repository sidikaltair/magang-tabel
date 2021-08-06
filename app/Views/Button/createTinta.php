<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<br><br>

<body>


    <form action="/Supplier/savetinta" method="POST">

        <div class="form-group text-dark">
            <div class="row g-3">
                <div class="col-2">
                    <label for="id_tinta">1.id_tinta</label>
                    <input type="text" class="form-control" id="id_tinta" name="id_tinta" placeholder="id_kertas">
                </div>

                <div class="col-3">
                    <label for="tanggal_pemesanan">2.tanggal_pemesanan</label>
                    <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="Masas">
                </div>

                <div class="col-2">
                    <label for="Nama_Spl">3.Nama_Spl</label>
                    <input type="text" class="form-control" id="Nama_Spl" name="Nama_Spl" placeholder="Mass">
                </div>
                <div class="col-2">
                    <label for="Jenis_tinta">4.Jenis_tinta</label>
                    <input type="text" class="form-control" id="Jenis_tinta" name="Jenis_tinta" placeholder="Mass">
                </div>


                <div class="col-3">
                    <label for="Turunan_tinta">5.Turunan_tinta </label>
                    <input type="text" class="form-control" id="Turunan_tinta" name="Turunan_tinta" placeholder="Masuertas">
                </div>

                <div class="col-2">
                    <label for="Jumlah_kaleng">6.Jumlah_kaleng</label>
                    <input type="text" class="form-control" id="Jumlah_kaleng" name="Jumlah_kaleng" placeholder="M">
                </div>


                <div class="col-2">
                    <label for="harga_sebelum">7.harga_sebelum</label>
                    <input type="text" class="form-control" id="harga_sebelum" name="harga_sebelum" placeholder="Masrtas">
                </div>

                <div class="col-2">
                    <label for="harga_sesudah">8.harga_sesudah</label>
                    <input type="text" class="form-control" id="harga_sesudah" name="harga_sesudah" placeholder="Masrtas">
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