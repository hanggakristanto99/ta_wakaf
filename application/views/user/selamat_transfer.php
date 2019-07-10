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


				<section id="contact" class="section">
			<div class="container ">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>Terimakasih</span></h2>
						</div>
					</div>
				</div>
			<div class="row row-no-gutters">
  <div class="col-xs-6 col-md-4"> </div>
  <?php echo form_open_multipart('member/c_upload_foto') ?>
	  	<?php
	        $no = 1; 
	        foreach($wakaf as $row){ 
	      ?>
		  <div class="col-xs-6 col-md-4">
		  	<form class="form" >
				<div class="text-center">
				<p>kami ucapkan terima kasih atas nama <br><h1><?php echo $row->nama;?></h1></p>  
				<p>telah melakukan donasi untuk program ini. <br> Donasi Anda sebesar :<br>  <h1>Rp. <?php echo $row->nominal;?></h1></p>
				<p>Silahkan untuk mentransfer ke Bank dibawah ini :</p> <p> <h1></h1></p>
				<h3><?php echo $row->bank;?></h3>
				<p>Klik tombol "Selanjutnya" untuk mengirim bukti transfer</p><br>
			</div>
				<div class="form-group text-center">
				<a href="<?php echo base_url() ?>member/c_upload_foto/e/<?php echo $row->id ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Selanjutnya</a>
				<!-- <a href="<?php echo base_url() ?>member/c_upload_foto/e/<?php echo $row->id ?>" class="btn btn-sm btn-success text-center">Kirim Foto</a> -->	
					<!-- <button type="submit" class="button primary"><i class="fa fa-send"></i>Submit</button> -->
					<!-- <button type="submit" class="btn btn-success">Kirim</button> <br><br><br> -->
		        </div>
			</form>
		  </div>
			<?php } ?>
		<?php echo form_close() ?>
  <div class="col-xs-6 col-md-4"> </div>
</div>			
</div>			
		</section>
<?php 
$this->load->view('user/footer');
 ?>