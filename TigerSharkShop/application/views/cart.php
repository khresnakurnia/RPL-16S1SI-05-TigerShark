    <?php if($_SESSION['a'] == 1 ){?>
            <script>

            alert('Banyak Barang Yang Hendak Anda Beli Melebihi Stok');

            </script>
    <?php $_SESSION['a'] = 0; } ?>
    <!-- ##### New Arrivals Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(<?php echo base_url('assets/img/bg-img/breadcumb.jpg')?>);">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2><i class="fa fa-shopping-bag" style="margin-right:5px;margin-bottom: 40px;margin-top:40px"></i> CART</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="new_arrivals_area section-padding-80 clearfix">

        <div class="container">
            <div class="row">
                <?php echo form_open('cart/proses_transaksi') ?>
                <div class="col-12">
                    <table width="100%" class="table table-responsive table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff;margin-bottom: 0px">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Banyak Barang</th>
                            <th>Stok Barang</th>
                            <th>Jumlah</th>
                            <th id="hpss">Hapus</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; foreach($cart as $c) {

                            ?> 
                            <input id="sem_id<?= $c->id_cart ?>" type="hidden" name="qty<?= $c->id_cart ?>" class="semm">
                            <tr class="odd gradeX">

                                <td> <?= $i; ?> </td>
                                <td style="width: 30%">
                                    <img style="width: 100%" src="<?= base_url().'upload/produk/'.$c->foto_produk ?>">
                                </td>
                                <td style="width: 25%"><?= $c->nama_produk; ?></td>
                                <td style="width: 13%">Rp. 
                                    <span id="hargap_id<?= $c->id_cart ?>" class="hargap"><?= $c->harga_produk; ?></span>
                                </td>
                                <td id="qss" style="width: 7%">
                                    <input style="width: 100%" id="qty_id<?= $c->id_cart ?>" class="qts" onkeyup="kali(<?= $c->id_cart ?>)" type="text" name="qtys<?= $c->id_cart ?>" placeholder="Input Banyak Barang" value="0" required>
                                </td>
                                <td style="width: 5%">
                                    <span class="stoks"><?= $c->stok_produk; ?></span>
                                </td>
                                <td style="width: 15%">Rp. 
                                    <span id="harga_id<?= $c->id_cart ?>" class="harjum" value="0">0</span>
                                </td>
                                <td style="width: 5%" class="hps">
                                    <a href="<?= base_url('cart/cart_hapus/'.$c->id_cart) ?>">
                                        <div class="btn btn-danger">
                                            <i class="fa fa-trash">
                                            </i>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; } ?> 

                        </tbody>
                        <input type="hidden" value="0" name="" id="total_s">
                    </table>

                    <br>

                    <div class="col-sm-12" overflow: auto;">
                        <h4><b>Pilih Kurir :</b> </h4>
                        <select style="margin-top: 20px;margin-left: auto;float: right;">
                            <option>JNE ( Gratis Biaya Ongkir )</option>
                        </select>

                    </div>

                    <div class="col-sm-12" style="text-align: right;margin-top: 30px">
                        <a href="#konf">
                            <div id="checkout" onclick="konfirmasi()" class="btn essence-btn"><i class="fa fa-shopping-cart" style="margin-right:5px;"></i>Checkout</div>
                        </a>
                    </div>
                </div>

                <div id="konf" class="col-sm-12" style="display: none;">
                    <h2><i class="fa fa-handshake-o" style="margin-right:10px;margin-bottom: 40px;margin-top:60px"></i>Konfirmasi Checkout</h2>
                    <br>
                    <h4 style="margin-left:40px"><b>Total Belanja : </b>Rp. <span id="hartot"> 12129 </span></h4>
                    <input type="hidden" name="tot" id="tot_s">
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="company">Nama Lengkap :</label>
                            <input type="text" class="form-control" name="nama-kon" value="<?= $users->nama_user ?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="company">Email :</label>
                            <input type="email" class="form-control" name="email-kon" value="<?= $users->email_user ?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="company">Nomor Telepon :</label>
                            <input type="text" class="form-control" name="hp-kon" value="<?= $users->hp_user ?>" required>
                        </div>
                        <br>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="company">Alamat Tujuan :</label>
                            <textarea type="text" class="form-control" name="alamat-kon" value="<?= $users->alamat ?>" required></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="col-sm-12" style="margin-top: 30px">
                        <div id="checkout_p" class="btn essence-btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" style="margin-right:5px;"></i>Checkout</div>
                        
                        <a href="#awal">
                            <div id="batal" onclick="batal()" class="btn essence-btn"><i class="fa fa-window-close" style="margin-right:5px;"></i>Batal</div>
                        </a>
                    </div>
                </div>

                <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: none">
                        <h2 style="text-align: center;"><span class="fa fa-money" style="margin-right:5px;"></span>Pilih Metode Pembayaran</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body" style="padding-top: 25px">

                        <div class="row">
                            <div class="col-sm-6">
                                <center>
                                    <h5><input type="radio" name="optradio" value="COD (Cash On Delivery)" style="margin-right:5px;position: relative;top:2px" required>COD (Cash On Delivery)</h5>
                                </center>
                            </div>
                            
                            <div class="col-sm-6" style="border-left: 1px solid #ffe48c">
                                <center>
                                    <h5><input type="radio" value="Transfer Bank" name="optradio" style="margin-right:5px;position: relative;top:2px" required>Transfer Bank</h5>
                                </center>
                            </div>
                            <br>
                            <br>
                            <div class="col-sm-12">
                            <center style="margin-top:30px;text-align: center;">
                            <button id="checkout_s" class="btn btn-success" style="margin-left:auto;margin-right:auto;"><i class="fa fa-shopping-cart" style="margin-right:5px;"></i>Checkout</button>
                            </center>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="border-top: none">
                    </div>
                </div>
            </div>
            </div> 
            <?php echo form_close() ?>  
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Brands Area Start ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand1.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand2.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand3.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand4.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand5.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand6.png" alt="">
        </div>
    </div>
    <!-- ##### Brands Area End ##### -->

    <script type="text/javascript">

        function kali(id){
            var x = document.getElementById("qty_id"+id);
            var z = document.getElementById("hargap_id"+id).textContent;
            var y = document.getElementById("harga_id"+id);
            var g = document.getElementById("sem_id"+id);
// alert(z.length);
            if(z.length<=3){
                y.innerHTML = z * x.value;
                y.value = z * x.value * 1000;
                g.value = x.value;
            }else if(z.length>=5 && z.length<=8 ){

                y.innerHTML = z * x.value * 1000;
                y.value = z * x.value * 1000;

                g.value = x.value;
            }else if(z.length>=9){
                z = parseInt(z);
                y.innerHTML = z * x.value * 1000000;
                y.value = z * x.value * 1000000;

                g.value = x.value;
            }
        // y.innerHTML = x.value * harga.toString();
  // var n = harga.toString().length; 
  // alert(z*);
}
</script>
<script type="text/javascript">
    function konfirmasi(){

        var z = document.getElementsByClassName("hargap");
        var x = document.getElementsByClassName("qts");
        var v = document.getElementsByClassName("harjum");
        var d = document.getElementsByClassName("hps");
        var e = document.getElementById("hpss");
        var h = document.getElementById("tot_s");
        var f = document.getElementsByClassName("stoks");
        var g = document.getElementsByClassName("semm");
        e.style.display = "none";
        var i;
        var j=0;
        var y = 0;
        for (i = 0; i < x.length; i++) {
            if(parseInt(v[i].textContent) == "0"){
                alert('Banyak Barang Ada Yang Masih Kosong / 0');
                j = 1;
                break;
            }else{
                if(x[i].value > parseInt(f[i].textContent)){
                    alert('Banyak Barang melebihi Stok');
                    j = 1;
                    break;
                }
            }
        } 
        if(j == 0){
            for (i = 0; i < x.length; i++) {
                if(z[i].length<=3){
                    // g[i].value = z[i] * x[i].value * 1000;
                }else{
                    // g[i].value = z[i] * x[i].value * 1000;
                }
                x[i].disabled = true;
                d[i].style.display = "none";
                y = parseInt(v[i].textContent)+y;
            }
            var z = document.getElementById("hartot");
            z.innerHTML = y;
            h.value = y;
            var a = document.getElementById("konf");
            a.style.display = "inline-block";
            var b = document.getElementById("checkout");
            b.style.display = "none";
        }

    }
    function batal(){
        var a = document.getElementById("konf");
        var d = document.getElementsByClassName("hps");
        var e = document.getElementById("hpss");
        e.style.display = "table-cell";
        a.style.display = "none";
        var b = document.getElementById("checkout");
        b.style.display = "inline-block";
        var x = document.getElementsByClassName("qts");
        for (i = 0; i < x.length; i++) {
            d[i].style.display = "table-cell";
            x[i].disabled = false;
        } 
    }
</script>