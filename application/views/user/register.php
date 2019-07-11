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
							<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://wa.me/628561333111?text=Assalamualaikum,%20saya%20ingin%20berwakaf%20..."><i class="fa fa-whatsapp "></i></a></li>
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
							<h2> <span>Registrasi</span></h2>
						</div>
					</div>
				</div>
				<!-- Google Map -->
			<div class="row row-no-gutters">
  <div class="col-xs-6 col-md-4"> </div>
  <div class="col-xs-12 col-md-4">
  	<?php echo form_open_multipart('member/c_register/simpan') ?>
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Nama</label>
				<input type="text" name="email" class="form-control" placeholder="Nama" required="required">
            </div>
            <div class="form-group">
            	<label for="exampleInputEmail1">Email</label>
				<input type="email" name="username" class="form-control" placeholder="Email" required="required">
            </div>
			<div class="form-group">
				<label for="exampleInputEmail1">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
            	<label for="exampleInputEmail1">Setatus</label>
				<input type="text" name="level" value="member" readonly>
            </div>
			<div class="form-group text-center">	
				<button type="submit" class="button primary"><i class="fa fa-send"></i>Simpan</button>
            </div>
		</form>
		<?php echo form_close() ?>
<!-- 				<?php echo form_open_multipart('admin/c_data_donatur/simpan') ?>
        						<form>
        						  <div class="form-group">
        							    <label for="text">Username</label>
        							    <input type="text" name="username" class="form-control" placeholder="Nama">
        							  </div>

        							  <div class="form-group">
        							    <label for="text">Password</label>
        							    <input type="text" name="password" class="form-control" placeholder="Password">
        							  </div>

        							  <div class="form-group">
        							    <label for="text">Level</label>
        							    <input type="text" name="level" value="member" readonly class="form-control" >
        							  </div>
        						<button type="submit" class="btn btn-md btn-success">Simpan</button>
        					  <button type="reset" class="btn btn-md btn-warning">reset</button>
        						</form>
        					<?php echo form_close() ?> -->

  </div>
  <div class="col-xs-6 col-md-4"> </div>
</div>			
		</section>
<br><br>
		<!--/ End Clients Us -->
<?php 
$this->load->view('user/footer');
 ?>