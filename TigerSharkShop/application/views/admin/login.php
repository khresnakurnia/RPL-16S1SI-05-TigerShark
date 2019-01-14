<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TigerShark Admin </title>

  <link href="<?php echo base_url() ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>admin_assets/fontawesome/css/font-awesome.min.css" rel="stylesheet">
  
  <link href="<?php echo base_url() ?>admin_assets/css/style.css" rel="stylesheet">
</head>
<body>
<div id="back">
	<div id="warna">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4" style="text-align: center;">
		<div style="overflow: auto;padding:15px;background-color: rgba(255,255,255,0.6);border-radius: 5px;margin-top: 40px">
		<h2 class="error"></h2>
		<h2 class="jdl-menu jdl-reglog" >Login Admin TigerShark</h2>
		<br>
		<br>
		<?php echo form_open('admin/proses'); ?>
		<input type="text" name="username_adm" class="form-control" placeholder="Username">
		<br>
		<?= form_error('username_adm') ?>
		<br>

		<input type="password" name="password_adm" class="form-control" placeholder="Password">
		<br>
		<?= form_error('password_adm') ?>
		<br>

		<button class="btn btn-success btn-login btn-login-modal" >
			<span class="glyphicon glyphicon-log-in" style="margin-right:5px"></span> Login
		</button>
		<?php echo form_close(); ?>
	</div>
	</div>
</div>
</div>
</body>
</html>