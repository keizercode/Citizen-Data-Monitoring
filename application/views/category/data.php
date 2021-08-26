<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  @media print {
    .user {
      display: none;
    }

    .menu {
      display: none;
    }

    .list {
      display: none;
    }

    .active {
      display: none;
    }

    .header {
      display: none;
    }

    .btn {
      display: none;
    }

    .table-responsive {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    .form {
      display: none;
    }

    .info-container {
      display: none;
    }

    .page-loader-wrapper {
      display: none;
    }

    @page {
      size: 594mm 841mm;

    }

    @page :footer {
      display: none
    }

    .aksi {
      display: none;
    }

  }
</style>

<div class="block-header">
  <h2>
    Data Warga
  </h2>
</div>

<!-- Basic Examples -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div <?= $master; ?>>
          <a href="<?= site_url('category/p/input'); ?>" class="btn btn-primary">+Tambah</a> <a href="" id="print-button" style="cursor: pointer;" onclick="window.print();return false;" class="btn btn-success">Cetak</a>
        </div>
        <div class="form">
          <form method="POST" action="<?= site_url('category/p/data'); ?>">
            <input type="text" name="keyword" placeholder="cari" style="margin-top: 2px">
          </form>
        </div>
        <div class="table-responsive-md">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
              <tr>
                <th rowspan="2" style="text-align:center;vertical-align:middle">No</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Tanggal</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Lokasi</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Jumlah Warga</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Jumlah Warga Sehat</th>
                <th colspan=" 6" style="text-align:center;vertical-align:middle">Terpapar Covid</th>
                <th rowspan=" 2" style="text-align:center;vertical-align:middle">Sembuh</th>
                <th class="aksi" rowspan="2" style="text-align:center;vertical-align:middle" <?= $master; ?>>Action</th>
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
            <tbody>
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
                  <td><?= $data->l10; ?></td>

                  <td width="80" <?= $master; ?>>
                    <a href="<?= site_url('category/p/input') ?>/<?= $data->no; ?>" class="btn btn-warning material-icons">edit</a>
                    <a href="<?= site_url('category/hapus') ?>/<?= $data->no ?>" class="btn btn-danger material-icons" onclick="return confirm('Anda yakin ingin menghapus data?')">delete</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #END# Basic Examples -->

<style type="text/css">
  .zoom {
    transition: transform .2s;
    width: 70px;
    height: 50px;
  }

  .zoom:hover {
    -ms-transform: scale(3.5);
    /* IE 9 */
    -webkit-transform: scale(3.5);
    /* Safari 3-8 */
    transform: scale(3.5);
  }
</style>