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
							<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://wa.me/628561333111?text=Assalamualaikum,%20saya%20ingin%20berwakaf%20..."><i class="fa fa-whatsapp "></i></a></li>
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
			<?php echo $this->session->flashdata('notif') ?>
			<div class="container ">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2> <span>BerWakaf</span></h2>
						</div>
					</div>
				</div>
			<div class="row row-no-gutters">
  <div class="col-xs-6 col-md-4"> </div>
  <div class="col-xs-12 col-md-4">
  	<?php echo form_open_multipart('member/c_jenis_wakaf/input') ?>



  	<form class="form" method="post">
  		 <div class="form-group">
		    <label for="text">Nama</label>
		    <input type="text" name="nama" class="form-control" value="<?= $this->session->userdata('email') ?> " required="required">
		  </div>
        <div class="form-group">
            <label for="nama_barang">Jenis Wakaf</label>
            <select class="form-control" name="jenis_wakaf" id="nama_barang"  required="required">
            </select>
          </div>

		<div class="form-group">
			<label>Nominal </label>
			<input type="text"  name="nominal" placeholder="Nominal " required="required">
        </div>
        <div class="form-group">
	      <label>Transfer ke Bank </label>
	      <select name="bank" class="form-control" required>
	        <option>Pilih Bank</option>
	        <option>BNI 7070705980 an.kitawakaf</option>
	        <option>BCA 3560705964 an.kitawakaf</option>
	        <option>BRI 9830705937 an.kitawakaf</option>
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
  <script type="text/javascript">
  	var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

  </script>