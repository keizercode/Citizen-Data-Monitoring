<?php
if ($btn == "EDIT") {
    $val = $val->row_array();
} else {
    $val['no'] = "";
    $val['id_category'] = "";
    $val['l1'] = "";
    $val['l2'] = "";
    $val['l3'] = "";
    $val['l4'] = "";
    $val['l5'] = "";
    $val['l6'] = "";
    $val['l7'] = "";
    $val['l8'] = "";
    $val['l9'] = "";
    $val['l10'] = "";
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
                <label for="no"></label>
                <input type="hidden" name="no" id="no" value="<?= $val['no']; ?>">
                <label for="id_category">Tanggal</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="date" name="id_category" id="id_category" value="<?= $val['id_category']; ?>" class="form-control">
                    </div>
                </div>
                <label for="l1">Nama Lokasi</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l1" id="l1" value="<?= $val['l1']; ?>" class="form-control" placeholder="Jakarta Selatan, RT00/RW00" maxlength="100">
                    </div>
                </div>

                <label for="l2">Jumlah Warga</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l2" id="l2" value="<?= $val['l2']; ?>" class="form-control" placeholder="Jumlah Warga" maxlength="100">
                    </div>
                </div>


                <label for="l3">Jumlah Warga Sehat</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l3" id="l3" value="<?= $val['l3']; ?>" class="form-control" placeholder="Jumlah Warga Sehat (belum pernah terkena covid)" maxlength="100">
                    </div>
                </div>


                <label for="l4">Jumlah Terpapar Covid (Tanpa Gejala)</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l4" id="l4" value="<?= $val['l4']; ?>" class="form-control" placeholder="Jumlah Terpapar Covid (Tanpa Gejala)" maxlength="100">
                    </div>
                </div>


                <label for="l5">Jumlah Terpapar Covid (Ringan)</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l5" id="l5" value="<?= $val['l5']; ?>" class="form-control" placeholder="Jumlah Terpapar Covid (Ringan)" maxlength="100">
                    </div>
                </div>

                <label for="l6">Jumlah Terpapar Covid (Sedang)</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l6" id="l6" value="<?= $val['l6']; ?>" class="form-control" placeholder="Jumlah Terpapar Covid (Sedang)" maxlength="100">
                    </div>
                </div>

                <label for="l7">Jumlah Terpapar Covid (Berat)</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l7" id="l7" value="<?= $val['l7']; ?>" class="form-control" placeholder="Jumlah Terpapar Covid (Berat)" maxlength="100">
                    </div>
                </div>

                <label for="l8">Jumlah Terpapar Covid (Meninggal)</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l8" id="l8" value="<?= $val['l8']; ?>" class="form-control" placeholder="Jumlah Terpapar Covid (Meninggal)" maxlength="100">
                    </div>
                </div>

                <label for="l9">Jumlah Terpapar Covid (Tanpa Keterangan)</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l9" id="l9" value="<?= $val['l9']; ?>" class="form-control" placeholder="Jumlah Terpapar Covid (Tanpa Keterangan)" maxlength="100">
                    </div>
                </div>

                <label for="l10">Jumlah Sembuh</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="l10" id="l10" value="<?= $val['l10']; ?>" class="form-control" placeholder="Jumlah Warga Yang Sembuh" maxlength="100">
                    </div>
                </div>
                <input type="submit" name="simpan" value="<?= $btn; ?>" class="btn btn-primary m-t-15 waves-effect">
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- #END# Vertical Layout -->