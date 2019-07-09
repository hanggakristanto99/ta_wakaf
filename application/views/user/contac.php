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
										<li><a href="<?php echo site_url('member/c_profil'); ?>">Profil</a></li>
										<li><a href="<?php echo site_url('member/c_berita'); ?>">Berita</a></li>
										<li><a href="<?php echo site_url('member/c_wakaf'); ?>">Wakaf</a></li>
										<li class="active"><a href="<?php echo site_url('member/c_contac'); ?>">Contact</a></li>

										<?php
											if ($this->session->userdata('logged_in')=='Sudah Loggin') {
										?>
										<li><a href="<?php echo site_url('c_home/logout'); ?>">Logout</a></li><?php
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
							<li><a href="https://www.facebook.com/wakaf.umat"><i class="fa fa-facebook"></i></a></li>
							<li><a href="mailto:yayasan.wakafin@gmail.com"><i class="fa fa-envelope "></i></a></li>
							<li><a href="https://www.instagram.com/wakafin_wakaf_produktif/"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<!--/ End Social -->
					</div>
				</div>
			</div>
		</header>
		<!--/ End Header -->


		<!-- Location -->
		<section id="location" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2><span>Hubungi Kami</span></h2>
							<p>Untuk Konsultasi wakaf, anda dapat menghubungi kami melalui :</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
						<!-- Single Address -->
						<div class="single-address">
							<a href="https://wa.me/628561333111?text=Assalamualaikum,%20saya%20ingin%20berwakaf%20...">
								
							<i class="fa fa-whatsapp"></i>
							</a>
							<a href="https://wa.me/628561333111?text=Assalamualaikum,%20saya%20ingin%20berwakaf%20...">
								
							<h4>Whatsapp</h4>
							</a>
							<a href="https://wa.me/628561333111?text=Assalamualaikum,%20saya%20ingin%20berwakaf%20...">
							<p>+8801812345678</p>
								
							</a>
						</div>
						<!--/ End Single Address -->
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
						<!-- Single Address -->
						<div class="single-address">
							<a href="mailto:yayasan.wakafin@gmail.com">
								
							<i class="fa fa-envelope"></i>
							</a>
							<a href="mailto:yayasan.wakafin@gmail.com">
								
							<h4>Email</h4>
							</a>
							<a href="mailto:yayasan.wakafin@gmail.com">
							<p>yayasan.wakafin@gmail.com</p>
								
							</a>
						</div>
						<!--/ End Single Address -->
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
						<!-- Single Address -->
						<div class="single-address">
							<a href="callto:5551234567">
							<i class="fa fa-phone"></i>
							</a>															
							<a href="callto:5551234567">
								
							<h4>Phone</h4>
							</a>
							<a href="callto:5551234567">
							<p>(555)123-4567</p>
								
							</a>
						</div>
						<!--/ End Single Address -->
					</div>

				</div>
			</div>
		</section>
		<!--/ End Location -->
<?php 
$this->load->view('user/footer');
 ?>