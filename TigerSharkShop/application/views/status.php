    <div class="breadcumb_area bg-img" style="background-image: url(<?php echo base_url('assets/img/bg-img/breadcumb.jpg')?>);">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2><i class="fa fa-handshake-o" style="margin-right:5px;margin-bottom: 40px;margin-top:40px"></i> Status Transaksi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout_area section-padding-80">
    <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff;margin-bottom: 0px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Waktu Transaksi</th>
                        <th>Total Harga</th>
                        <th>Metode Pembayaran</th>
                        <th>Status</th>
                        <th>Konfirmasi Transaksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=1; foreach ($status as $s) {
                        ?>
                        <tr class="odd gradeX">

                            <td> <?= $i; ?> </td>
                            <td><a class="tran" href="<?php echo base_url('user/detail/'.$s->id_transaksi.'#about') ?>"><?= $s->id_transaksi; ?></a></td>
                            <td><?= $s->waktu_trx; ?></td>
                            <td>Rp. <?= $s->jumlah_trx; ?></td>
                            <td><?= $s->metode_trx; ?></td>
                            <td><?php if($s->status_trx == 0){
                                echo "Belum Konfirmasi Transaksi";
                            }else if($s->status_trx == 1){
                                echo "Menunggu Konfirmasi Admin";
                            }else if($s->status_trx == 2){
                                echo "Proses Pengiriman Barang";
                            }else if($s->status_trx == 3){
                                echo "Barang Telah Dikirim";
                                echo "<br>";
                                echo "No Resi JNE : <b>".$s->resi."</b>";
                            }else if($s->status_trx == 4){
                                echo "Transaksi Ditolak";
                            }else if($s->status_trx == 5){
                                echo "Transaksi Selesai";
                            }?></td>
                            <td>
                                <?php if($s->status_trx == 0){ ?>
                                    <a href="<?php echo base_url('user/bayar/'.$s->id_transaksi) ?>">
                                        <button class="btn essence-btn"><span class="fa fa-handshake-o"></span>Konfirmasi</button>
                                    </a>
                                <?php }else if($s->status_trx == 1){
                                    echo "Sudah Konfirmasi";
                                }?>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
    </div>
    </div>
    </div>
    <br>