<?php 
$this->load->view('user/header');
 ?>
  		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<!-- Logo -->
						<div class="logo">
							<a href="#">KitaWakaf</a>
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
										<li><a href="<?php echo site_url('member/c_home'); ?>">Home</a>
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
		<!-- Start blog -->
		<!-- Start blog -->
		<section id="blog" class="single section page">
			<div class="container">
				<div class="row">
					<?php
			            $no = 1; 
			            foreach($wakaf as $row){ 
			          ?>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<!-- Single blog -->
						<div class="single-blog">
							<div class="blog-head">
								 <?php 
											if($row->gambar==''){?>
											<?php }else{ ?>
												<img src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>"><br>
											<?php }?>
							</div>
							<div class="blog-content">
								<h2><?php echo $row->judul;?></h2>
								<div class="meta">
									<span><i class="fa fa-calendar"></i><?php echo date("d F Y", strtotime($row->tgl));?></span>
									<!-- <span><i class="fa fa-calender"></i>19 May</span>
									<span><i class="fa fa-comments"></i>5 Comments</span> -->
								</div>
								<p><?php echo $row->artikel;?></p>
							</div>
						</div>
						<!--/ End Single blog -->
					</div>
					<?php } ?>
					<div class="col-md-4 col-sm-12 col-xs-12 text-center">
						<!-- Blog Sidebar -->
						<div class="blog-sidebar">
							<!-- Single Sidebar -->
							<div class="single-sidebar tags">
								<h2>Wakaf <span>Sekarang</span></h2>
								<a href="<?php echo site_url('member/c_halaman_login'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Wakaf</a>
								<!-- <button type="button" class="btn btn-primary btn-lg">Wakaf</button> -->
								<br>
								<br>
								<p>Silahkan klik tombol untuk melakukan wakaf</p>
							</div>
							<!--/ End Single Sidebar -->
						
							
						</div>
						<!--/ End Blog Sidebar -->
					</div>
				</div>
			</div>
			<div class="gmap">
				<div class="map"></div>
			</div>
		</section>
		<!--/ End blog -->
<?php 
$this->load->view('user/footer');
 ?>