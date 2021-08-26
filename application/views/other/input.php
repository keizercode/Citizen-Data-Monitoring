<?php 
if ($btn == "EDIT") {
    $val = $val->row_array();
}else{
    $val['id_other'] = "";
    $val['product_name'] = "";
    $val['date_update'] = "";
    $val['type'] = "";
    $val['status'] = "";
    $val['reason'] = "";
    $val['image'] = "";
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
                <label for="id_other">Product ID</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="id_other" id="id_other" value="<?= $val['id_other']; ?>" class="form-control">
                    </div>
                </div>
                <label for="product_name">Product Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="product_name" id="product_name" value="<?= $val['product_name']; ?>" class="form-control" placeholder="Enter the product name" required="" maxlength="100">
                    </div>
                </div>

                <label for="type">Type</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="type" id="type" value="<?= $val['type']; ?>" class="form-control" placeholder="Enter the type" required="" maxlength="100">
                    </div>
                </div>


                <label for="date_update">Date Update</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="Date" name="date_update" id="date_update" value="<?= $val['date_update']; ?>" class="form-control" placeholder="Enter your the product date" required="">
                    </div>
                </div>               
                <label for="status">Status</label>
                <div class="form-group">
                    <div class="form-line">
                        <select name="status" id="status" class="form-control show-tick" value="<?= $val['status']; ?>">
                            <option value="">--Choose--</option>
                            <option value="PASS">PASS</option>
                            <option value="DELETE">DELETE</option>
                            <option value="HIDE">HIDE</option>
                        </select>
                    </div>
                </div>
                <label for="reason">Reason</label>
                <div class="form-group">
                    <div class="form-line">
                        <select name="reason" id="level" class="form-control show-tick" value="<?= $val['reason']; ?>">
                            <option value="">--Choose--</option>
                            <option value="Melanggar ketentuan product shopee">Melanggar ketentuan product shopee</option>
                            <option value="Product dilarang dijual pemerintah">Product dilarang dijual pemerintah</option>
                            <option value="Product ini ilegal untuk dijual di Indonesia ">Product ini ilegal untuk dijual di Indonesia </option>
                        </select>
                    </div>
                </div>
                <label>Upload Image</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="file" name="image" id="image">
                    </div>
                </div>


                <input type="submit" name="simpan" value="<?= $btn; ?>" class="btn btn-primary m-t-15 waves-effect">
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- #END# Vertical Layout -->