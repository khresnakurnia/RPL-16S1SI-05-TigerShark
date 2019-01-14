    <div class="breadcumb_area bg-img" style="background-image: url(<?php echo base_url('assets/img/bg-img/breadcumb.jpg')?>);">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2><i class="fa fa-info-circle" style="margin-right:5px;margin-bottom: 40px;margin-top:40px"></i> Info Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout_area section-padding-80">
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
                <?php echo form_open('user/info_user'); ?>
                <div class="row">
                    <div class="col-sm-3">
                        <label style="text-align: left !important;margin-left:40px">Nama Lengkap : </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama-us" value="<?= $users->nama_user ?>" style="text-transform:capitalize;" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <label style="text-align: left !important;margin-left:40px">Email : </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="email" name="email-us" class="form-control" value="<?= $users->email_user ?>" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <label style="text-align: left !important;margin-left:40px">Nomor Handphone : </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="hp-us" class="form-control" value="<?= $users->hp_user ?>" required>
                    </div>
                    <br>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <label style="text-align: left !important;margin-left:40px; ">Alamat Lengkap : </label>
                    </div>
                    <div class="col-sm-9">
                        <textarea style="height: 200px;width: 70%" name="alamat-us" class="form-control" required><?= $users->alamat ?></textarea>
                    </div>
                </div>
                <br>
                <br>
                <button class="btn essence-btn" style="margin-left:40px;"><span class="fa fa-save" style="margin-right:5px; "></span>SIMPAN</button>
                <?= form_close(); ?>
            </div>
    </div>
    </div>
    </div>
    <br>