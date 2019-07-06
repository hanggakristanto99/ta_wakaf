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
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="mailto:kitawakaf@gmail.com"><i class="fa fa-envelope "></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
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
							<h2> <span>Login</span></h2>
						</div>
					</div>
				</div>
				<!-- Google Map -->
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							

							
						</div>
					<!-- Contact Form -->
					
					<!--/ End Contact Form -->
				</div>
			</div>
			<div class="row row-no-gutters">
  <div class="col-xs-6 col-md-4"> </div>
  <div class="col-xs-6 col-md-4">
  	<?php echo form_open("member/c_halaman_login/cek_login"); ?>
  	<form class="form" method="post" >
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" name="username" placeholder="Email" required="required">
                            </div>
							<div class="form-group">
								<label for="exampleInputEmail1">Password</label>
								<input type="password" name="password" placeholder="Password" required="required">
                            </div>
							<div class="form-group text-center">	
								<button type="submit" class="button primary"><i class="fa fa-send"></i>Login</button>
                            </div>
						</form>
						<?php echo form_close(); ?><br>
							
					<div class="text-center">
						<a href="<?php echo site_url('member/c_register'); ?>" class="center">
						   Belum punya akun, Buat Akun Sekarang?
						</a>
					</div>

  </div>
  <div class="col-xs-6 col-md-4"> </div>
</div>			
		</section>

		<!--/ End Clients Us -->
<?php 
$this->load->view('user/footer');
 ?>