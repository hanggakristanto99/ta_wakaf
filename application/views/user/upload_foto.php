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
							<h2> <span>Upload foto</span></h2><br>
						</div>
					</div>
				</div><br>
	<div class="row row-no-gutters">
  <div class="col-xs-6 col-md-4"> </div>
  <div class="col-xs-6 col-md-4">
		<div class="container">
	
		                  							<?php 
									foreach($data_pewakaf as $row){
        						 echo form_open_multipart('member/c_upload_foto/edit') ;?>
        						<form class="form">
        						  <div class="form-group">
        							    
        							    <input type="hidden" name="nama" class="form-control" placeholder="nama" value="<?php echo $row->nama;?>">
        							  </div>

        							  <div class="form-group">
        							    
        							    <textarea type="hidden" style="display:none;" name="jenis_wakaf" class="form-control" placeholder="Jenis wakaf"><?php echo $row->jenis_wakaf;?></textarea>
        							  </div>

        							  <div class="form-group">
        							    <input type="hidden" name="nominal" class="form-control"  value="<?php echo $row->nominal;?>">
        							  </div>
			                        <div class="form-group">
			                          <input type="hidden" name="bank" class="form-control"  value="<?php echo $row->bank;?>">
			                        </div>

        							  <div class="form-group col-md-4">
        							    <!-- <label for="text">Gambar</label> -->
        							    <!-- <?php 
											if($row->gambar==''){?>
												<label>Belum Ada Gambar</label><br>
											<?php }else{ ?>
												<img src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>"><br>
											<?php }?> -->
											Klik Tombol "Choose File" Untuk Memilih Gambar <br> <input type="file" name="gambar" class="form-control">
        							  </div><br>
        							  <input type="hidden" name="id" value="<?php echo $row->id;?>">
        						<button type="submit" class="btn btn-success">Kirim</button> <br><br><br>
        						</form><br>
        					<?php echo form_close(); }?> <br>
		</div>
  </div>
  <div class="col-xs-6 col-md-4"> </div>
</div>			
</div>			
		</section>
<br>
<br>
		<!--/ End Clients Us -->
<?php 
$this->load->view('user/footer');
 ?>