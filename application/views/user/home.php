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
										<li class="active"><a href="<?php echo site_url('member/c_home'); ?>">Home</a>
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
		<!--/ End Header -->
		
		<!-- Start Slider -->
		<section id="j-slider">
			<div class="slide-main">
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url(<?= base_url();?>awal/images/slider/slider-bg1.jpg);" >
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text left">
									<div class="slider-inner">
										<h1>Gerakan Wakaf Produktif Program Binaan Desa Berkah & Sejahtera</h1>
										<p>Wakaf Tunai Untuk Pembelian Lahan Pertanian Terpadu (Sawah, Kebun, Ternak Hewan Kurban, Dan Lain-lain)</p>
										<p>Wakaf Aset Berupa Wakaf Tanah Dan Bangunan (Properti), Wakaf Bisnis Dan Usaha, Wakaf Saham Dan Surat Berharga.</p>
										<div class="slide-button">
											<a href="#contact" class="button primary">Wakaf Sekarang</a>
										</div>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url(<?= base_url();?>awal/images/slider/slider-bg2.jpg);" >
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text center">
									<div class="slider-inner">
										<h1>Gerakan Wakaf Produktif Program Binaan Desa Berkah & Sejahtera</h1>
										<p>Wakaf Tunai Untuk Pembelian Lahan Pertanian Terpadu (Sawah, Kebun, Ternak Hewan Kurban, Dan Lain-lain)</p>
										<p>Wakaf Aset Berupa Wakaf Tanah Dan Bangunan (Properti), Wakaf Bisnis Dan Usaha, Wakaf Saham Dan Surat Berharga.</p>
										<div class="slide-button">
											<a href="#contact" class="button primary">Wakaf Sekarang</a>
										</div>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url(<?= base_url();?>awal/images/slider/slider-bg1.jpg);" >
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text right">
									<div class="slider-inner">
										<h1>Gerakan Wakaf Produktif Program Binaan Desa Berkah & Sejahtera</h1>
										<p>Wakaf Tunai Untuk Pembelian Lahan Pertanian Terpadu (Sawah, Kebun, Ternak Hewan Kurban, Dan Lain-lain)</p>
										<p>Wakaf Aset Berupa Wakaf Tanah Dan Bangunan (Properti), Wakaf Bisnis Dan Usaha, Wakaf Saham Dan Surat Berharga.</p>
										<div class="slide-button">
											<a href="#contact" class="button primary">Wakaf Sekarang</a>
										</div>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Slider -->
		
		<!-- Start Service -->
		<section id="service" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>Program</span></h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Service -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
						<div class="single-service">
							<i class="fa fa-check"></i>
							<h2>Cara Berdonasi Mudah</h2>
							<p>Berdonasi hanya dengan beberapa langkah mudah kapanpun dimanapun.</p>
						</div>
					</div>
					<!--/ End Single Service -->
					<!-- Single Service -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
						<div class="single-service">
							<i class="fa fa-sitemap"></i>
							<h2>Variatif Program</h2>
							<p>Program sosial untuk membantu & memberdayakan saudara kita.</p>
						</div>
					</div>
					<!--/ End Single Service -->
					<!-- Single Service -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
						<div class="single-service">
							<i class="fa fa-send"></i>
							<h2>Donasi Tepat Saluran</h2>
							<p>Donasi yang anda titipkan disalurkan tepat kepada penerima manfaat.</p>
						</div>
					</div>
					<!--/ End Single Service -->
					<!-- Single Service -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
						<div class="single-service">
							<i class="fa fa-edit"></i>
							<h2>Pengelolaan Profesional</h2>
							<p>Profesional baik dalam mengelola hingga menyalurkan donasi anda.</p>
						</div>
					</div>
					<!--/ End Single Service -->
				</div>
			</div>
		</section>
		<!--/ End Service -->


		
		<!-- Start Statics -->
		<section id="statics" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<div class="statics">	
								<div class="col-md-12 col-sm-12 col-xs-12">
									<h2>VARIATIF PROGRAM!</h2>
									<p>Berbagai program Sosial Untuk Membantu & Memberdayakan Saudara Kita.</p>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
									<!-- Static Single -->
									<div class="static-single">
										<div class="number"><span class="counter">130</span></div>
										<p>DONASI TERSALURKAN</p>
									</div>
								</div>
								<!-- End Single -->	
								<!-- Static Single -->
								<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
									<div class="static-single">
										<div class="number"><span class="counter">100</span></div>
										<p>#ORANGBAIK TERGABUNG</p>
									</div>
								</div>
								<!-- End Single -->	
								<!-- Static Single -->
								<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
									<div class="static-single">
										<div class="number"><span class="counter">550</span></div>
										<p>PENERIMA MANFAAT</p>
									</div>
								</div>
								<!-- End Single -->	
								<!-- Static Single -->
								<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
									<div class="static-single">
										<div class="number"><span class="counter">40.99</span><span class="percent">%</span></div>
										<p>DONATUR BERSINERGI</p>
									</div>
								</div>
								<!-- End Single -->	
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="static-image wow fadeIn"></div>
		</section>	
		<!--/ End Statics -->
		
		<!-- Our Skill -->
		<section id="our-skill" class="section">
			<div class="container">
				<div class="row"> 
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn">
						<!-- Info Main -->
						<div class="info-main">
							<div class="section-title left">
								<h2> <span>Manfaat</span></h2>
							</div>
							<div class="some-info">
								<p>Di era disruption ini, KITAWAKAF buat galang dana jadi lebih transparan dan viral. Ini baru inovasi sosial yang dibutuhkan oleh Indonesia.</p>
							</div>
							<ul class="info-list">
								<li><i class="fa fa-check"></i>Harta benda yang diwakafkan tetap utuh terpelihara, terjamin kelangsungannya dan tidak bisa hilang atau berpindah tangan.</li>
								<li><i class="fa fa-check"></i>Secara prinsip barang wakaf tidak boleh ditasarrufkan (dijual, dihibahkan, atau diwariskan).</li>
								<li><i class="fa fa-check"></i>Manfaatnya terus dirasakan oleh orang banyak, bahkan lintas generasi, karena kepemilikan harta wakaf tidak bisa dipindahkan.</li>
							</ul>	
						</div>
						<!--/ End Info Main -->
					</div>				
					<div class="col-md-6 col-sm-12 col-xs-12">
						<!-- Skill Main -->
						<div class="skill-main">
							<div class="section-title left">
								<h2> <span>Uang Terkumpul</span></h2>
							</div>
							<!-- Single Skill -->
							<div class="single-skill">
								<div class="skill-info">
									<h4>Donasi</h4>
								</div>
								<div class="progress">
									<div class="progress-bar" data-percent="80"><span>80%</span></div>
								</div>
							</div>	
							<!--/ End Single Skill -->
							<!-- Single Skill -->
							<div class="single-skill">
								<div class="skill-info">
									<h4>Wakaf Uang</h4>
								</div>
								<div class="progress">
									<div class="progress-bar" data-percent="90"><span>90%</span></div>
								</div>
							</div>	
							<!--/ End Single Skill -->
							<!-- Single Skill -->
							<div class="single-skill">
								<div class="skill-info">
									<h4>Wakaf Aset</h4>
								</div>
								<div class="progress">
									<div class="progress-bar" data-percent="70"><span>70%</span></div>
								</div>
							</div>	
							<!--/ End Single Skill -->
							<!-- Single Skill -->
							<div class="single-skill">
								<div class="skill-info">
									<h4>ZIS</h4>
								</div>
								<div class="progress">
									<div class="progress-bar" data-percent="60"><span>95%</span></div>
								</div>
							</div>	
							<!--/ End Single Skill -->
						</div>
						<!--/ End Skill Main -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Our Skill -->
		
		<!-- Start Testimonials -->
		<section id="testimonial" class="section wow fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2>Apa Pendapat Mereka? <span></span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="testimonial-carousel">	
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<div class="testimonial-content">
									<p> Disinilah ia melihat pentingnya menggalaknya tentang wakaf produktif melalui sosialisi dan edukasi agar masyarakat berlomba-lomba untuk ikut berwakaf. </p>
								</div>
								<div class="testimonial-info">
									<div class="img">
										<span class="arrow"></span>
										<img src="<?= base_url();?>awal/images/testimonial1.jpg" class="img-circle" alt="">
									</div>
									<h6>Shakil<span>Founder Codeglim</span></h6>
								</div>			
							</div>
							<!--/ End Single Testimonial -->
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<div class="testimonial-content">
									<p>wakaf produktif ini merupakan sesuatu yang berbeda yang memberikan manfaat lebih luas dan patut diperjuangkan oleh umat Islam. </p>
								</div>
								<div class="testimonial-info">
									<div class="img">
										<span class="arrow"></span>
										<img src="<?= base_url();?>awal/images/testimonial2.jpg" class="img-circle" alt="">
									</div>
									<h6>Rimu<span>CEO Codeglim</span></h6>
								</div>			
							</div>
							<!--/ End Single Testimonial -->
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<div class="testimonial-content">
									<p> Wakaf ibaratkan berbisnis dengan Allah untuk akhirat nanti. Seperti yang dikatakan Ust. Wahyu “Dengan berwakaf ini kita sedang bertransaksi dengan Allah. Sedang membeli kavling di surga” </p>
								</div>
								<div class="testimonial-info">
									<div class="img">
										<span class="arrow"></span>
										<img src="<?= base_url();?>awal/images/testimonial3.jpg" class="img-circle" alt="">
									</div>
									<h6>Jehad<span>Founder DesignGuru</span></h6>
								</div>			
							</div>
							<!--/ End Single Testimonial -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonial -->


		<!-- Start Portfolio -->
		<section id="portfolio" class="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center"><br><br>
							<h2> <span>Berita</span></h2>
							<p>Berita terbaru hari ini</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="portfolio-carousel">
					<?php
			            $no = 1; 
			            foreach($berita as $row){ 
			          ?>
							<!-- Single Portfolio -->
							<div class="portfolio-single">
								<a href="<?php echo base_url() ?>member/c_berita/e/<?php echo $row->id ?>">
									<div class="portfolio-head">
										<?php if($row->gambar==''){}else{?>

							            <img src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>">
							          <?php }?>
										<i class="fa fa-search"></i>
									</div>
								</a>
								<div class="text">
									<h4><a href="<?php echo base_url() ?>member/c_berita/e/<?php echo $row->id ?>"><?php echo $row->judul;?></a></h4>
									<p><?php echo date("d F Y", strtotime($row->tgl));?></p>
								</div>
							</div>
							<!--/ End Portfolio -->
							
					 <?php } ?>
						</div>
					</div>
				</div><br><br>
			</div>
		</section>
		<!--/ End Portfolio -->

		<!-- Start Portfolio -->
		<section id="portfolio" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>Wakaf</span></h2>
							<p>Berita terbaru hari ini</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="portfolio-carousel">
					<?php
			            $no = 1; 
			            foreach($wakaf as $row){ 
			          ?>
							<!-- Single Portfolio -->
							<div class="portfolio">
								<a href="<?php echo base_url() ?>member/c_wakaf/e/<?php echo $row->id ?>" >
									<div class="portfolio-head">
										<?php if($row->gambar==''){}else{?>

							            <img src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>">
							          <?php }?>
										<i class="fa fa-search"></i>
									</div>
								</a>
								<div class="text">
									<h4><a href="<?php echo base_url() ?>member/c_wakaf/e/<?php echo $row->id ?>"><?php echo $row->judul;?></a></h4>
									<p><?php echo date("d F Y", strtotime($row->tgl));?></p>
								</div>
							</div>
							<!--/ End Portfolio -->
							
					 <?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Portfolio -->
		
		<!-- Contact Us -->
		<section id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>Lokasi</span></h2>
							<p>Temui kami di alamat berikut</p>
						</div>
					</div>
				</div>
				<!-- Google Map -->
				<div class="row">
					<!-- Contact Form -->
					<div class="embed-responsive embed-responsive-100x400px">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.056978779462!2d106.77508431421705!3d-6.3866485642451325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e92c0df5da9d%3A0x8499222ee6779470!2sPeTIK+(Pesantren+Teknologi+Informasi+dan+Komunikasi)!5e0!3m2!1sen!2sid!4v1561003408194!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  					</div>
					<!--/ End Contact Form -->
				</div>
			</div>
		</section>
		<!--/ End Clients Us -->
		


<?php 
$this->load->view('user/footer');
 ?>