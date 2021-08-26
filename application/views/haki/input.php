<?php
if ($btn == "EDIT") {
    $val = $val->row_array();
} else {
    $val['id_haki'] = "";
    $val['brand'] = "";
    $val['product_type'] = "";
    $val['notes'] = "";
    $val['category'] = "";
    $val['price'] = "";
}
?>

<div class="block-header">
    <h2><?= $title ?></h2>
</div>

<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <?= form_open_multipart($url); ?>

                <input type="hidden" name="id_haki" id="id_haki" value="<?= $val['id_haki']; ?>">
                <label for="brand">Nomor KTP</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="brand" id="brand" value="<?= $val['brand']; ?>" class="form-control" placeholder="Masukkan Nomor KTP">
                    </div>
                </div>
                <label for="category">Nama Warga</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="category" id="category" value="<?= $val['category']; ?>" class="form-control" placeholder="Masukkan Nama Warga">
                    </div>
                </div>
                <label for="product_type">Vaksin 1</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="product_type" id="product_type" value="<?= $val['product_type']; ?>" class="form-control" placeholder="Jika Warga Sudah Vaksin 1(Contoh : Sudah)">
                    </div>
                </div>
                <label for="notes">Vaksin 2</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="notes" id="notes" value="<?= $val['notes']; ?>" class="form-control" placeholder="Jika Warga Sudah Vaksin 2(Contoh : Sudah) Jika Belum (Contoh : -)">
                    </div>
                </div>
                <label for="notes">Belum</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="price" id="price" value="<?= $val['price']; ?>" class="form-control" placeholder="Jika Warga Belum Vaksin(Contoh : Belum)">
                    </div>
                </div>



                <input type="submit" name="simpan" value="<?= $btn; ?>" class="btn btn-primary m-t-15 waves-effect">
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- #END# Vertical Layout -->