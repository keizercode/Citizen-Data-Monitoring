<?php require 'Category.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
</head>

<body>
    Tanggal cetak : <?= date('d F Y'); ?>
    <h1 style="text-align: center;">Data Warga</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th rowspan="2" style="text-align:center;vertical-align:middle">No</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Tanggal</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Lokasi</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Jumlah Warga</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Jumlah Warga Sehat</th>
                <th colspan=" 6" style="text-align:center;vertical-align:middle">Terpapar Covid</th>
            </tr>
            <tr>
                <th style="text-align:center;vertical-align:middle">Tanpa Gejala</th>
                <th style=" text-align:center;vertical-align:middle">Ringan</th>
                <th style="text-align:center;vertical-align:middle">Sedang</th>
                <th style=" text-align:center;vertical-align:middle">Berat/Kritis</th>
                <th style="text-align:center;vertical-align:middle">Meninggal</th>
                <th style=" text-align:center;vertical-align:middle">Tanpa Keterangan</th>
            </tr>
        </thead>
    </table>
    <?php 
    foreach ($val as $data) {
    ?>
                <tr>
                  <td><?= $data->no; ?></td>
                  <td><?= $data->id_category; ?></td>
                  <td><?= $data->l1; ?></td>
                  <td><?= $data->l2; ?></td>
                  <td><?= $data->l3; ?></td>
                  <td><?= $data->l4; ?></td>
                  <td><?= $data->l5; ?></td>
                  <td><?= $data->l6; ?></td>
                  <td><?= $data->l7; ?></td>
                  <td><?= $data->l8; ?></td>
                  <td><?= $data->l9; ?></td>
                </tr>
    }
</body>

</html>