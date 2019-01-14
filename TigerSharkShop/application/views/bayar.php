    <div class="breadcumb_area bg-img" style="background-image: url(<?php echo base_url('assets/img/bg-img/breadcumb.jpg')?>);">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2><i class="fa fa-money" style="margin-right:5px;margin-bottom: 40px;margin-top:40px"></i> Pembayaran</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout_area section-padding-80">
    <div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="checkout_details_area mt-50 clearfix">
                <?php if($trx->metode_trx == "Transfer Bank"){ ?>
                    <div class="cart-page-heading mb-30"><h5>
                    <b style="color:#34b656 !important">Silahkan Transfer Ke : </b>
                    </h5></div>
                    <h3 style="margin-bottom:30px"><b>Nomor Rekenening :</b> <?= $tentang->no_rek ?></h3>
                    <h3 style="margin-bottom:30px"><b>Bank :</b> <?= $tentang->bank ?></h3>
                    <h3 style="margin-bottom:40px"><b>Atas Nama :</b> <?= $tentang->atas_nama ?></h3>
                    <p style="margin-bottom:50px">( Jika Dalam Waktu 1 X 24 Jam Anda Tidak Melakukan Konfirmasi Pembayaran, Maka Transaksi Kami Nyatakan Dibatalkan )</p>
                    <div id="konf" data-toggle="modal" data-target="#myModal" class="btn essence-btn"><i class="fa fa-money"></i> Konfirmasi Transaksi</div>
                    <br><br>
                    <a href="<?php echo base_url('user/status/'.$_SESSION['id_user']) ?>">
                    <button id="lihat" class="btn essence-btn"><i class="fa fa-eye"></i> Lihat Status Transaksi</button>
                </a>
                <?php }else if($trx->metode_trx == "COD (Cash On Delivery)"){ ?>
                    <div class="cart-page-heading mb-30"><h5>
                    <b style="color:#34b656 !important">Silahkan Hubungi Kami Ke : </b>
                    </h5></div>
                    <h3 style="margin-bottom:30px"><b>Nomor Handphone :</b> <?= $tentang->hp_tentang ?></h3>
                    <p style="margin-bottom:50px">( Kirim WA atau SMS ke nomor diatas. Dengan Format TRANSAKSI#(nomor id transaksi Anda)#(jumlah uang yang harus dibayarkan, sesuai yang diatas). )</p>
                    <p style="margin-bottom:50px">( Jika Dalam Waktu 1 X 24 Jam Anda Tidak Melakukan Konfirmasi Pembayaran Ke Nomor Handphone Kami, Maka Transaksi Kami Nyatakan Dibatalkan )</p>
                    <a href="<?php echo base_url('user/status/'.$_SESSION['id_user']) ?>">
                    <button id="lihat" class="btn essence-btn"><i class="fa fa-eye" style="margin-right:5px;"></i>Lihat Status Transaksi</button>
                </a>
                <?php } ?>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5><b style="color:#34b656 !important">ID Transaksi</b></h5>
                            <p><?= $trx->id_transaksi ?></p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Jumlah yang harus dibayar</span> <span>Rp. <?= $trx->jumlah_trx ?></span></li>
                            <li><div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Jumlah Yang Anda Bayar Harus Sesuai Dengan Jumlah Diatas Sampai Digit Terakhir. Karena 3 Digit Terakhir Digunakan Sebagai Kode Transaksi Anda</p>
                                    </div>
                                </div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="breadcumb_area bg-img" style="background-image: url(<?php echo base_url('assets/img/bg-img/breadcumb.jpg')?>);">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2><i class="fa fa-handshake-o" style="margin-right:5px;margin-bottom: 40px;margin-top:40px"></i> Konfirmasi Pembayaran</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?= form_open_multipart('user/konfirmasi/'.$trx->id_transaksi) ?>
            <div class="modal-body" style="padding-top: 25px">


                <div class="row" style="margin-bottom:30px">
                    <div class="col-sm-4">
                        <label>Upload Bukti Pembayaran : </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" name="bukti" required>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-sm-4">
                        <label>No Rekening Anda : </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="rek-buk" required>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-sm-4">
                        <label>Bank Anda : </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="bank-buk" required>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-sm-4">
                        <label>Atas Nama Rekening Anda : </label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="an-buk" required>
                    </div>
                    <br>
                    <br>
                </div>
                <?php if($trx->status_trx == 0){ ?>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-sm-12">
                        <button id="checkout_s" class="btn essence-btn"><i class="fa fa-handshake-o" style="margin-right:5px;"></i>Konfirmasi</button>
                    </div>
                </div>
                <?php } ?>
                
            </div>
            <?= form_close() ?>
            <div class="modal-footer" style="border-top: none">
            </div>
        </div>

    </div>
</div> 