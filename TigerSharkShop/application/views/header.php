<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?php echo $tentang->judul_tentang ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url('upload/tentang/'.$tentang->logo); ?>">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/core-style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="<?php echo base_url('') ?>"><img src="<?php echo base_url('upload/tentang/'.$tentang->logo); ?>" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="<?php echo base_url('shop/') ?>">Shop</a>
                            </li>
                            <li><a href="#">Kategori</a>
                                <ul class="dropdown">
                                    <?php foreach ($daftarkat as $p) {
                            # code...
                            ?>
                                    <li><a href="<?php echo base_url('shop/category/'.$p->nama_kategori) ?>"><i class="fa fa-flash" aria-hidden="true"></i> <?= $p->nama_kategori ?></a></li>
                                <?php } ?>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

                <!-- User Login Info -->
                <?php if(!isset($_SESSION['id_user'])){ ?>
                <div class="user-login-info">
                    <a href="<?php echo base_url('auth') ?>"><img src="<?php echo base_url('assets/img/core-img/user.svg')?>" alt=""></a>
                </div>
                <?php } ?>

                <!-- Cart Area -->
                <?php if(isset($_SESSION['id_user'])){ ?>
                <div class="cart-area">
                    <a href="<?php echo base_url('cart/detail/'.$_SESSION['id_user']); ?>"><img src="<?php echo base_url('assets/img/core-img/bag.svg')?>" alt=""> <span><?= $count ?></span></a>
                </div>

                <div class="classynav">
                    <ul>
                        <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url('user/info/'); ?>">Info Account</a></li>
                                    <li><a href="<?php echo base_url('user/status/'.$_SESSION['id_user']); ?>">Status Transaksi</a></li>
                                </ul>
                            </li>
                    </ul>
                </div>

                <div class="cart-area">
                    <a href="<?php echo base_url('user/logout') ?>" alt="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </div>
                <?php } ?>


            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->