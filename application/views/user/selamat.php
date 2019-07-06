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
										<li><a href="<?php echo site_url('c_home'); ?>">Home</a>
										</li>
										<li><a href="<?php echo site_url('member/c_profil'); ?>">Profil</a></li>
										<li><a href="<?php echo site_url('member/c_berita'); ?>">Berita</a></li>
										<li class="active"><a href="<?php echo site_url('member/c_wakaf'); ?>">Wakaf</a></li>
										<li><a href="<?php echo site_url('member/c_contac'); ?>">Contact</a></li>

										<li><a href="<?php echo site_url('admin/c_admin/logout'); ?>"><?php
											if ($this->session->userdata('logged_in')=='Sudah Loggin') {
														
												echo "Logout";
											}
											elseif ($this->session->unset_userdata('level')=='Belum Login') {
												
												echo "Login";
											}		
											 ?></a>

										</li>				
										<!-- <li><a href="#why-choose"> Hi,, <?= $username; ?></a></li> -->
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
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-envelope "></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<!--/ End Social -->
					</div>
				</div>
			</div>
		</header>
		<!--/ End Header -->
				<!-- Contact Us -->
		<section id="contact" class="section">
			<div class="container ">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>Selesai</span></h2><br>
						</div>
					</div>
				</div><br>
	<div class="row row-no-gutters">
  <!-- <div class="col-xs-6 col-md-4"> </div> -->
  <div class="col-xs-6 col-md-4">
		<div class="container">
			<div class="text-center">
							<!-- <h2> <span>Upload Foto Berhasil</span></h2><br> -->
					<h2> <span>Selamat !</span></h2>
					<h2> <span> Foto Berhasil Di Upload!</span></h2><br>
					<div class="form-group text-center">	
								<a href="c_home" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali Ke Home</a>
								<a href="c_wakaf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">   Wakaf Lagi?   </a>
                            </div>
			</div>
		</div>
  </div>
  <div class="col-xs-6 col-md-4"> </div>
</div>			
		</section>
<br>
<br>
		<!--/ End Clients Us -->
<?php 
$this->load->view('user/footer');
 ?>