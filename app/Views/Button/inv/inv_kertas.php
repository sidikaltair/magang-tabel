<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <table id="table" class="table table-striped table-bordered" cellpadding="6" colspan="5">
        <thead class="thead-dark">
            <br />
            <br />
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
                <BR><BR>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;
            foreach ($kertas as $t) {
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
                    <td><?= $t->gramature; ?></td>

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

</body>

</html>