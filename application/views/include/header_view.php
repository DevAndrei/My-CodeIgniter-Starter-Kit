<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title><?php echo $title; ?></title>

   <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <style type="text/css">body{padding-top: 40px;}</style>
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
<?php $this->load->view('include/nav_view'); ?>
<div id="message"><?php echo $this->notify->output(); ?></div>
<div class="container">
   <div class="alert alert-info" id="current-user">
      <span class="pull-left">Hello <?php echo $this->session->userdata('fname') . ' ' . $this->session->userdata('lname') . ' (' . $this->session->userdata('username') . ')'; ?></span> 
      <span class="pull-right"><a href="">log out</a></span>
   </div>



