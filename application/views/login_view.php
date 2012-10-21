<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>Log in</title>

   <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?= base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
   <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
   <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
</head>
<body>
<div id="message"><?php echo $this->notify->output(); ?></div>
<div class="container">
	<div class="row">
    	<div id="login-form" class="offset4 span4">
		   	<form class="well" action="<?php echo base_url();?>login/process" method="post">
		      <legend>Login</legend>
		      <label>Username</label>
		      <input class="input-medium" type="text" name="username" value="<?php echo $this->session->flashdata('username'); ?>">
		      <label>Password</label>
		      <input class="input-medium" type="password" value="<?= $this->session->flashdata('password'); ?>" name="password">
		      <br>
		      <button type="submit" class="btn btn-primary">Login</button>
		   	</form>
    	</div>
    </div>
</div>
</body>
</html>