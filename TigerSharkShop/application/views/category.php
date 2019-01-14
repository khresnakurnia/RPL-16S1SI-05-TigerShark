    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>T I G E R S H A R K/SHOP</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catagories</h6>

                            <!--  Catagories  -->
                            <?php foreach ($daftarkat as $p) {
                            # code...
                            ?>
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li>
                                        <a href="<?php echo base_url('shop/category/'.$p->nama_kategori) ?>"><i class="fa fa-flash" aria-hidden="true"></i> <?= $p->nama_kategori ?></a>
                                    </li>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->

                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                        <?php foreach ($namecat as $dp) {
                        ?>     
                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="<?php echo base_url('shop/detail/'.$dp->id_produk) ?>">
                                        <img src="<?php echo base_url('upload/produk/'.$dp->foto_produk)?>" alt="">
                                        </a>
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-2.jpg" alt="">
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span><?= $dp->nama_kategori ?></span>
                                        <a href="<?php echo base_url('shop/detail/'.$dp->id_produk) ?>">
                                            <h6><?= $dp->nama_produk ?></h6>
                                        </a>
                                        <p class="product-price">Rp. <?= $dp->harga_produk ?></p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                            <a <?php if(isset($_SESSION['id_user'])){ ?>href="<?php echo base_url('cart/proses_cart/'.$dp->id_produk)?>" <?php }else if(!isset($_SESSION['id_user'])) { ?>href="<?php echo base_url('auth')?>" <?php }?>" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->