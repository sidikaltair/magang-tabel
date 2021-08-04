<table>
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin & Umur</th>
        <th>Alamat</th>
        <th>Tanggal </th>
        <th>Aksi</th>
    </tr>

    <?php
    mysql_connect("localhost", "root", "") or die("Koneksi Gagal..!");
    mysql_select_db("nusita") or die("Database Tidak Terdeteksi..!");
    include "fungsi_indotgl.php";

    $nomor = 0;
    $hasil = mysql_query("select * from nama_table");
    while ($dataku = mysql_fetch_array($hasil)) {
        $input = tgl_indo($dataku[tanggal]);
        $date1 = "$dataku[tanggal]";
        $date = new DateTime($date1);
    ?>

        <tr>
            <td><?php echo $nomor = $nomor + 1; ?></td>
            <td><?php echo $dataku['nama']; ?></td>
            <td><?php echo $dataku['kelamin']; ?>, <?php echo $dataku['umur']; ?> Tahun</td>
            <td><?php echo $dataku['alamat']; ?></td>
            <td><?php echo $input; ?> <?php echo $date->format("H:i:s"); ?></td>
        </tr>

    <?php  } ?>

</table>