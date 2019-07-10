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
										<li class="active"><a href="<?php echo site_url('member/c_berita'); ?>">Berita</a></li>
										<li><a href="<?php echo site_url('member/c_wakaf'); ?>">Wakaf</a></li>
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
		<!-- Start blog -->
		<section id="blog" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12  wow fadeIn">
						<div class="section-title center">
							<h2> <span>Berita</span></h2>
							<p>Berita yang terbaru</p>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="blog">
					<?php
			            $no = 1; 
			            foreach($berita as $row){ 
			          ?>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<!-- Single blog -->
									<div class="single-blog">
										<div class="blog-head">
											<?php if($row->gambar==''){}else{?>
									            <img  src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>">
									          <?php }?>
											<a href="<?php echo base_url() ?>member/c_berita/e/<?php echo $row->id ?>" class="link"><i class="fa fa-link"></i></a>
										</div>
										<div class="blog-content">
											<h2><a href="<?php echo base_url() ?>member/c_berita/e/<?php echo $row->id ?>"><?php echo $row->judul;?></a></h2>
											<div class="meta">
												<span><i class="fa fa-calendar"></i><?php echo date("d F Y", strtotime($row->tgl));?></span>
											</div>
											<!-- <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis.</p> -->
											<a href="<?php echo base_url() ?>member/c_berita/e/<?php echo $row->id ?>" class="btn btn-sm btn-success text-center">Read More <i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>	
									<!--/ End Single blog -->
								</div>
					<?php } ?>

							</div>
						</div>
					</div>
				</div>


			</div>
		</section>
		<!--/ End blog -->
<?php 
$this->load->view('user/footer');
 ?>