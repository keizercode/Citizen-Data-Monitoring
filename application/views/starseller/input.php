<?php 
if ($btn == "EDIT") {
    $val = $val->row_array();
}else{
    $val['no'] = "";
    $val['product_name'] = "";
    $val['date_input'] = "";
    $val['merk'] = "";
    $val['nama_lain'] = "";
    $val['type'] = "";
    $val['nmor_ref'] = "";
    $val['image'] = "";
    $val['status'] = "";
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
                <label for="product_name">Product Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="product_name" id="product_name" value="<?= $val['product_name']; ?>" class="form-control" placeholder="Enter your the Product Name">
                    </div>
                </div>
                <label for="merk">Merk</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="merk" id="merk" value="<?= $val['merk']; ?>" class="form-control" placeholder="Enter the merk"  maxlength="100">
                    </div>
                </div>

                <label for="nama_lain">Nama Lain</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="nama_lain" id="nama_lain" value="<?= $val['nama_lain']; ?>" class="form-control" placeholder="Enter the Nama Lain"  maxlength="100">
                    </div>
                </div>

                <label for="type">Type</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="type" id="type" value="<?= $val['type']; ?>" class="form-control" placeholder="Enter the Type"  maxlength="100">
                    </div>
                </div>

                <label for="nmor_ref">Nomor Refrensi</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="nmor_ref" id="nmor_ref" value="<?= $val['nmor_ref']; ?>" class="form-control" placeholder="Enter the Nomor Refrensi"  maxlength="100">
                    </div>
                </div>

                <label for="status">Status</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="status" id="status" value="<?= $val['status']; ?>" class="form-control" placeholder="Enter the Status"  maxlength="100">
                    </div>
                </div>

                 <label for="date_update">Date Input</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="Date" name="date_input" id="date_input" value="<?= $val['date_input']; ?>" class="form-control" placeholder="Enter your the product date" >
                    </div>
                </div>               

                <label>Upload Image</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="file" name="image" id="image" >
                    </div>
                </div>


                <input type="submit" name="simpan" value="<?= $btn; ?>" class="btn btn-primary m-t-15 waves-effect">
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- #END# Vertical Layout -->