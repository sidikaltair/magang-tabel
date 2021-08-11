<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    h1 {
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 15px;
    }

    td,
    th {
        border: 2px solid black;
        text-align: center;
        background-color: sandybrown;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Invoice KERTAS NUSITA </h1>
            </div>
        </div>
        <h3>Invoice kertas</h3>
        <p class="alamat">Kepada YTH jalan....
            jalan ciumbuleuit no 33 </p>
        <hr>
    </div>

    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, iure tempora est repudiandae earum ex quia rem ad quibusdam exercitationem iusto maxime. Et autem excepturi commodi sed facere eos voluptatem.</P>
    <br>
    <br>
    <table class="table table-striped table-bordered" cellpadding="6" colspan="5">
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
                <th scope="col">nama_supplier</th>
            </tr>
        </thead>

        <tbody>
            <?php

            // $query = $this->kertasModel->tampil();
            // if (@$_GET['id_kertas'] != '') {
            //     $query->tampil(@$_GET['id_kertas']);
            // } else {
            //     $query->tampil();
            // }

            $i = 1;
            foreach ($tampil as $t) {
            ?>

                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $t->id_kertas; ?></td>
                    <td><?= $t->tanggal_pemesanan; ?></td>
                    <td><?= $t->Nama_krts; ?></td>
                    <td><?= $t->Jenis_ivo; ?></td>
                    <td><?= $t->jumlah_rim; ?></td>
                    <td><?= $t->ukuran; ?></td>
                    <td><?= $t->harga_sebelum; ?></td>
                    <td><?= $t->harga_sesudah; ?></td>
                    <td><?= $t->nama_supplier; ?></td>
                </tr>
            <?php
            }
            ?>


        </tbody>


    </table>
</body>

</html>