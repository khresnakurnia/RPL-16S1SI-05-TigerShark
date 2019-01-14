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
        <table width="100%" class="table table-responsive table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff;margin-bottom: 0px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Banyak Barang</th>

                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; foreach($detail as $c) {

                        ?> 
                        <input id="sem_id<?= $c->id_cart ?>" type="hidden" name="qty<?= $c->id_cart ?>" class="semm">
                        <tr class="odd gradeX">

                            <td> <?= $i; ?> </td>
                            <td style="width: 30%"><img style="width: 100%" src="<?= base_url().'upload/produk/'.$c->foto_produk ?>"></td>
                            <td><?= $c->nama_produk; ?></td>
                            <td><?= $c->nama_kategori; ?></td>
                            <td>Rp. <span id="hargap_id<?= $c->id_cart ?>" class="hargap"><?= $c->harga_produk; ?></span></td>
                            <td><?= $c->qty_cart; ?></td>

                        </tr>
                        <?php $i++; } ?> 

                    </tbody>
                </table>
                <a href="<?php echo base_url('user/status/'.$_SESSION['id_user'])?>">
                <button class="btn essence-btn" style="margin-top:30px"><span class="fa fa-hand-o-left" style="margin-right: 5px"></span>Kembali</button>
                </a>
    </div>
    </div>
    </div>
    <br>