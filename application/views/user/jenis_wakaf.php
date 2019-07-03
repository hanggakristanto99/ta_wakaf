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
				<!-- Contact Us -->
		<section id="contact" class="section">
			<div class="container ">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>Jenis Wakaf</span></h2>
						</div>
					</div>
				</div>
			<div class="row row-no-gutters">
  <div class="col-xs-6 col-md-4"> </div>
  <div class="col-xs-6 col-md-4">
  	<?php echo form_open_multipart('member/c_jenis_wakaf/input') ?>
  	<form class="form" method="post">
  		 <div class="form-group">
		    <label for="text">Nama</label>
		    <input type="text" name="nama" class="form-control" placeholder="Nama">
		  </div>
		<!-- <div class="form-group">
			<label>Jenis Wakaf </label>
			<input type="text" readonly name="jenis_wakaf" value="sawah" required="required">
        </div> -->
        <div class="form-group">
            <label for="nama_barang">Jenis Wakaf</label>
            <select class="form-control" name="jenis_wakaf" id="nama_barang" required>
            </select>
          </div>
		<div class="form-group">
			<label>Nominal </label>
			<input type="text" name="nominal" placeholder="nominal " required="required">
        </div>
        <!-- <div class="form-group">
			<label>Bank </label>
			<input type="text" name="bank" value="BNI" readonly required="required">
        </div> -->
        <div class="form-group">
	      <label>Transfer ke Bank </label>
	      <select name="bank" class="form-control" required>
	        <option value="">Pilih Bank</option>
	        <option value="BNI 7070705980 an.kitawakaf">BNI 7070705980 an.kitawakaf</option>
	        <option value="">BCA</option>
	        <option value="">BRI</option>
	      </select>
	    </div>
		<div class="form-group text-center">	
			<button type="submit" class="button primary"><i class="fa fa-send"></i>Simpan</button>
        </div>
	</form>
	<?php echo form_close() ?>
  </div>
  <div class="col-xs-6 col-md-4"> </div>
</div>			
		</section>

		<!--/ End Clients Us -->
<?php 
$this->load->view('user/footer');
 ?>
  <script type="text/javascript"> 
      var string = "";
      var result = <?= $barang ?>;
      // console.log(result);

   

      string += "<option> Pilih Jenis Wakaf </option>";

      for(value in result){
        string += "<option>"+ result[value].judul +"</option>";
      }
      
      nama_barang.innerHTML = string;
      
      
        
  </script>