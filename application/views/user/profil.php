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
										<li class="active"><a href="<?php echo site_url('member/c_profil'); ?>">Profil</a></li>
										<li><a href="<?php echo site_url('member/c_berita'); ?>">Berita</a></li>
										<li><a href="<?php echo site_url('member/c_wakaf'); ?>">Wakaf</a></li>
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
		<!-- Start About Us -->
		<section id="about-us" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>Profil</span></h2>
							<p>kitawakaf adalah website untuk menggalang dana dan berdonasi secara online dan transparan.</p>
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
									<p>KitaWkaf adalah lembaga nirlaba milik masyarakat indonesia yang berkhidmat mengangkat harkat sosial kemanusiaan kaum dhuafa dengan dana ZISWAF (Zakat, Infaq, Shadaqah, Wakaf, serta dana lainnya yang halal dan legal, dari perorangan, kelompok, perusahaan/lembaga). Kelahirannya berawal dari empati kolektif komunitas jurnalis yang banyak berinteraksi dengan masyarakat miskin, sekaligus kerap jumpa dengan kaum kaya. Digagaslah manajemen galang kebersamaan dengan siapapun yang peduli kepada nasif dhuafa. Empat orang wartawan yaitu Parni Hadi, Haidar bagir, S. Sinansari Ecip, dan Eri Sudewo berpadu sebagai Dewan Pendiri lembaga independen Dompet Dhuafa Republika.

									</p><br>
									<p>Berdasarkan Undang-undang RI Nomor 38 Tahun 1999 tentang Pengelolaan zakat, KitaWkaf merupakan institusi pengelola zakat yang dibentuk oleh masyarakat. Tanggal 8 Oktober 2001, Menteri Agama Republik Indonesia mengeluarkan Surat Keputusan Nomor 439 Tahun 2001 tentang Pengukuhan KitaWkaf sebagai Lembaga Amil Zakat tingkat nasional.</p>
								</div>
								<div role="tabpanel" class="tab-pane fade in" id="about">
									<div class="about">
										<p>Zakat adalah harta tertentu yang dikeluarkan apabila telah mencapai syarat yang diatur sesuai aturan agama, dikeluarkan kepada 8 asnaf penerima zakat. Menurut Bahasa kata “zakat” berarti tumbuh, berkembang, subur atau bertambah.</p>
										<p>Zakat berasal dari bentuk kata "zaka" yang berarti suci, baik, berkah, tumbuh, dan berkembang. Dinamakan zakat, karena di dalamnya terkandung harapan untuk beroleh berkah, membersihkan jiwa dan memupuknya dengan berbagai kebaikan (Fikih Sunnah, Sayyid Sabiq: 5).</p>
										<p>Menurut istilah dalam kitab al-Hâwî, al-Mawardi mendefinisikan zakat dengan nama pengambilan tertentu dari harta tertentu, menurut sifat-sifat tertentu dan untuk diberikan kepada golongan tertentu. Orang yang menunaikan zakat disebut Muzaki. Sedangkan orang yang menerima zakat disebut Mustahik.</p>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade in" id="information">
									<p>Zakat adalah suatu ibadah umat Islam yang dilaksanakan dengan cara memberikan sejumlah kepemilikan harta setelah kadarnya terpenuhi kepada orang yang berhak menerimanya sesuai dengan ketentuan syariat Islam. Menurut istilah bahasa (etimologi), kata zakat berasal dari kata zaka yang artinya tumbuh, berkah, bersih dan berkembang.</p>
									<p>Zakat merupakan rukun islam keempat yang diwajibkan kepada setiap umat muslim yang sudah dianggap mampu mengeluarkannya, karena dengan mengeluarkan harta untuk berzakat kita dapat membersihkan harta agar kembali kepada hakekatnya yaitu kesucian.
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