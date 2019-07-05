<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="welcome to codeglim">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		
		<!-- Title Tag -->
        <title>KITAWAKAF | Hangga</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?= base_url();?>awal/images/favicon.png">	
		
        <!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 

		<!-- Google Map Api -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
	
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?= base_url();?>awal/css/font-awesome.min.css">

		<!-- Animate CSS -->
        <link rel="stylesheet" href="<?= base_url();?>awal/css/animate.min.css">

		<!-- Slicknav CSS -->
        <link rel="stylesheet" href="<?= base_url();?>awal/css/slicknav.min.css">

		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="<?= base_url();?>awal/css/owl.theme.default.css">
        <link rel="stylesheet" href="<?= base_url();?>awal/css/owl.carousel.min.css">
		
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="<?= base_url();?>awal/css/magnific-popup.css">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url();?>awal/css/bootstrap.min.css">
		
		<!-- Bizpro Style CSS -->
        <link rel="stylesheet" href="<?= base_url();?>awal/style.css">
        <link rel="stylesheet" href="<?= base_url();?>awal/css/default.css">	
        <link rel="stylesheet" href="<?= base_url();?>awal/css/responsive.css">	
		<link rel="stylesheet" href="<?= base_url();?>awal/css/skin/green.css">
		

	<!-- 	<link rel="stylesheet" href="#" id="colors"> -->
    </head>
        <body>
	
		<!-- Preloader -->
		<div class="loader">
			<div class="l-inner">
				<div class="k-spinner">
					<div class="k-bubble-1"></div>
					<div class="k-bubble-2"></div>
				</div>
			</div>
        </div>
		<!--/ End Preloader -->
		
<!-- 		<div class="mp-color">
			<a href="https://wa.me/628561333111?text=Saya%20tertarik%20untuk%20membeli%20mobil%20Anda">
				
			<div class="icon inOut"><i class="fa fa-whatsapp"></i></div>
			</a>
		</div> -->
				<!-- Mp Color -->
		<div class="mp-color">
			<div class="icon inOut"><i class="fa fa-cog fa-whatsapp "></i></div>
			<h4>Hubungi Admin</h4>
			<h4>Melalui Whatsapp?</h4>
			<ul>
				<li><a href="https://wa.me/628561333111?text=Assalamualaikum,%20saya%20ingin%20bertanya%20..." target="_blank" ><img style="width: 100px; height: 100px;display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;" src="http://www.jagatreview.com/wp-content/uploads/2013/04/whatsapp-logo.png?w=640" alt="..." class="rounded-circle"></a></li>
				<!-- <li><a href="">melalui wa</a></li> -->
			</ul>
		</div>
		<!--/ ENd Mp Color -->
		<!-- Start Header -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<!-- Logo -->
						<div class="logo">
							<a href="<?php echo site_url('c_user'); ?>">KitaWakaf</a>
						</div>
						<!--/ End Logo -->
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="nav-area">
							<!-- Main Menu -->
							<nav class="mainmenu">
								<div class="mobile-nav"></div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav menu">
										<li class="active"><a href="<?php echo site_url('c_user'); ?>">Home</a>
										</li>
										<li><a href="<?php echo site_url('member/c_profil'); ?>">Profil</a></li>
										<li><a href="<?php echo site_url('member/c_berita'); ?>">Berita</a></li>
										<li><a href="<?php echo site_url('member/c_wakaf'); ?>">Wakaf</a></li>
										<li><a href="<?php echo site_url('member/c_contac'); ?>">Contact</a></li>

										<?php
											if ($this->session->userdata('logged_in')=='Sudah Loggin') {

														?>
														<li><a href="<?php echo site_url('member/c_home/logout'); ?>">Logout</a></li><?php
											}
											else {
												
												?>
														<li><a href="<?php echo site_url('member/c_halaman_login'); ?>">Login</a></li><?php

											}		
											 ?>
									</ul>
								</div>
							</nav>
							<!--/ End Main Menu -->
						</div>
					</div>
					<div class="col-md-2">
						<!-- Social -->
						<ul class="social">
							<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="mailto:kitawakaf@gmail.com"><i class="fa fa-envelope "></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<!--/ End Social -->
					</div>
				</div>
			</div>
		</header>