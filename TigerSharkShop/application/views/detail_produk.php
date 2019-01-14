    <!-- ##### Single Product Details Area Start ##### -->
    <?php $i = 0; foreach ($detailprod as $p) {
    ?> 
    <section class="single_product_details_area d-flex align-items-center">

        
        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="<?= base_url().'upload/produk/'.$p->foto_produk ?>" alt="">
                <img src="<?= base_url().'upload/produk/'.$p->foto_produk ?>" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span><?= $p->nama_kategori; ?></span>
                <h2><?= $p->nama_produk; ?></h2>
            <p class="product-price">Rp. <?= $p->harga_produk; ?></p>
            <p class="product-desc"><?= $p->keterangan_produk; ?></p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">Size: XL</option>
                        <option value="value">Size: X</option>
                        <option value="value">Size: M</option>
                        <option value="value">Size: S</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <a <?php if(isset($_SESSION['id_user'])){ ?> href="<?php echo base_url('cart/proses_cart/'.$p->id_produk)?>"<?php }else if(!isset($_SESSION['id_user'])) { ?>href="<?php echo base_url('auth')?>" <?php }?>">
                    <div name="addtocart" value="5" class="btn essence-btn">Add to cart</div>></a>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php $i++; } ?> 
    <!-- ##### Single Product Details Area End ##### -->