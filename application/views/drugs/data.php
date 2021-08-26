<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="block-header">
  <h2>
    Drugs
  </h2>
</div>

<!-- Basic Examples -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div <?= $master; ?>>
          <a href="<?= site_url('drugs/p/input'); ?>" class="btn btn-primary">+ADD</a>
        </div>
        <form method="POST" action="<?= site_url('drugs/p/data'); ?>">
          <input type="text" name="keyword" placeholder="search" style="margin-top: 2px">
        </form>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Type</th>
                <th>Date</th>
                <th>Status</th>
                <th>Image</th>
                <th>Reason</th>
                <th <?= $master; ?>>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($val as $data) {
              ?>
                <tr>
                  <td><?= $data->id_drugs; ?></td>
                  <td><?= $data->product_name; ?></td>
                  <td><?= $data->type; ?></td>
                  <td><?= $data->date_update; ?></td>
                  <td><?= $data->status; ?></td>
                  <td><img class="zoom" src="data:<?php echo $data->no; ?>;base64,<?php echo $data->image; ?>"></td>
                  <td><?= $data->reason; ?></td>
                  <td width="80" <?= $master; ?>>
                    <a href="<?= site_url('drugs/p/input') ?>/<?= $data->no ?>" class="btn btn-warning material-icons">edit</a>
                    <a href="<?= site_url('drugs/hapus') ?>/<?= $data->no ?>" class="btn btn-danger material-icons" onclick="return confirm('Anda yakin ingin menghapus data!!')">delete</a>
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