<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TIGERSHARK ADMIN</title>
<script src="<?php echo base_url(); ?>admin_assets/js/my.js"></script>
  <!-- Bootstrap -->
  <link href="<?php echo base_url() ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url() ?>admin_assets/fontawesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- iCheck -->
    <link href="<?php echo base_url('admin_assets/datatables-plugins/dataTables.bootstrap.css') ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('admin_assets/datatables-responsive/dataTables.responsive.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url() ?>admin_assets/css/custom.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <link href="<?php echo base_url() ?>admin_assets/css/datatables.css" rel="stylesheet">
  <style type="text/css">
  .tran{
  color: blue;
  text-decoration: underline;
  }
    .tran:hover{
  
  color: purple;
  text-decoration: underline;
}


  </style>
<!--   <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/js/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/js/jque.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/js/jquery.dataTables.min.js"></script> -->
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php $this->load->view('admin/nav') ?>

      <!-- top navigation -->
      <div class="top_nav">
        <?php $this->load->view('admin/home') ?>

      </div>