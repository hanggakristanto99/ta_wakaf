<?php 
$this->load->view('user/header');
 ?>
  		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<!-- Logo -->
						<div class="logo">
							<a href="auth">Admin</a>
						</div>
						<!--/ End Logo -->
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="nav-area">
							<!-- Main Menu -->
							<nav class="mainmenu">
								<div class="mobile-nav"></div>
								<div class="collapse navbar-collapse">
	
								</div>
							</nav>
							<!--/ End Main Menu -->
						</div>
					</div>
					<div class="col-md-2">
						<!-- Social -->
						<ul class="social">
							<li><a href="https://www.facebook.com/wakaf.umat"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://wa.me/628561333111?text=Assalamualaikum,%20saya%20ingin%20berwakaf%20..."><i class="fa fa-whatsapp "></i></a></li>
							<li><a href="https://www.instagram.com/wakafin_wakaf_produktif/"><i class="fa fa-instagram"></i></a></li>
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
				 <?php echo $this->session->flashdata('notif') ?>
				<!-- Google Map -->
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<!-- <a href="<?php echo site_url('member/c_register'); ?>"><p>Belum punya akun ? Buat Akun Sekarang?</p></a> --><br>
						</div>
					<!-- Contact Form -->
					
					<!--/ End Contact Form -->
				</div>
			</div>
			<div class="row row-no-gutters">
  <div class="col-xs-6 col-md-4"> </div>
  <div class="col-xs-12 col-md-4">
  	<?php echo form_open("auth/cek_login"); ?>
  	<form class="form" method="post" >
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="username" name="username" placeholder="Username" required="required">
                            </div>
							<div class="form-group">
								<label for="exampleInputEmail1">Password</label>
								<input type="password" name="password" placeholder="Password" required="required">
                            </div>
							<div class="form-group  text-center">	
								<button type="submit" class="button primary"><i class="fa fa-send"></i>Login</button>
                            </div>
						</form>
						<?php echo form_close(); ?>
  </div>
  <div class="col-xs-6 col-md-4"> </div>
</div>			
		</section>
<br>
		<!--/ End Clients Us -->
<?php 
$this->load->view('user/footer');
 ?>