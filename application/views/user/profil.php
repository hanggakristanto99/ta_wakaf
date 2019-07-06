<?php 
$this->load->view('user/header');
 ?>
 		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<!-- Logo -->
						<div class="logo">
							<a href="<?php echo site_url('c_home'); ?>">KitaWakaf</a>
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

										<li><a href="<?php echo site_url('c_home'); ?>">Home</a></li>
										<li class="active"><a href="<?php echo site_url('member/c_profil'); ?>">Profil</a></li>
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
		<!-- Start About Us -->
		<section id="about-us" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>Profil</span></h2>
							<p>KITAWAKAF merupakan website untuk berwakaf secara online dan transparan</p>
						</div>

					</div>
				</div>
				<div class="row"> 
					<!-- About Image -->
					<div class="col-md-5 col-sm-12 col-xs-12 wow slideInLeft">
						<div class="about-main">
							<div class="about-img">
								<img src="<?= base_url();?>awal/images/q.png" alt=""/>
							</div>
						</div>
					</div>
					<!--/ End About Image -->
					<div class="col-md-7 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1s">
						<!-- About Tab -->
						<div class="tabs-main">
							<!-- Tab Nav -->
						
							<!--/ End Tab Nav -->
							<!-- Tab Content -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="welcome">
									<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KITAWAKAF adalah adalah institusi pengelola obyek wakaf dari masyarakat yang mengelola secara profesional, amanah, berjangkauan luas (global) demi membangun kesejahteraan masyarakat yang berhak menerimanya melalui program-program yang terutama bersifat memberdayakan (produktif).
									</p>
									<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KITAWAKAF sebagai organisasi filantropi Islam, bertekad menjadikan umat Islam dunia sebagai subjek pembangunan peradaban global yang lebih baik. Tekad KITAWAKAF, menjadi titik api pembangunan masyarakat sipil yang kuat, mendorong wakaf sebagai gerakan masyarakat Islam dunia.	</p><h1></h1>
									<p align="justify"> 
									Visi: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menjadi lembaga filantropi Islam internasional berbasis sistem pengelolaan wakaf yang profesional untuk mewujudkan peradaban dunia yang lebih baik. <h1></h1>

									</p>
									Misi: <br>

									<p align="justify">(a) Membangun sistem edukasi wakaf yang terkonsep dan terkelola secara profesional untuk menjamin masyarakat mengenal, menyadari, dan terlibat sebagai subjek pemberdayaan wakaf.</p> 

									<p align="justify">(b) Membangun model-model sistem implementasi program pengelolaan wakaf yang terkonsep dan terkelola secara profesional untuk menjamin masyarakat terberdayakan. </p>
									<p align="justify">
										
									(c) Membangun sistem tata kelola wakaf yang kreatif, inovatif, produktif, dan transparan sehingga wakaf sukses menjadi gerakan masif masyarakat dunia.
									</p>


								</div>
							</div>
							<!--/ End Tab Content -->
						</div>
						<!--/ End About Tab -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End About Us -->
<?php 
$this->load->view('user/footer');
 ?>