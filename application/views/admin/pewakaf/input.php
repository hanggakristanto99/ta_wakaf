<?php 
  $this->load->view('header')
?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url() ?>admin/c_home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>admin/c_wakaf"><i class="fa fa-circle-o"></i> Wakaf</a></li>
        <li><a href="<?php echo base_url() ?>admin/c_berita"><i class="fa fa-circle-o"></i> Berita</a></li>
        <li><a href="<?php echo base_url() ?>admin/c_data_donatur"><i class="fa fa-circle-o"></i> Data Donatur</a></li>
        <li class="active"><a href="<?php echo base_url() ?>admin/c_pewakaf"><i class="fa fa-circle-o"></i> Data Pewakaf</a></li>
        <li><a href="<?php echo site_url('admin/c_admin/logout'); ?>"><i class="fa fa-circle-o"></i> Logout</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Input Data Pewakaf
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
        				<div class="row">
        					<div class="col-md-12">
        						<?php echo form_open_multipart('admin/c_pewakaf/input') ?>
        						<form>
        						  <div class="form-group">
        							    <label for="text">Nama</label>
        							    <input type="text" name="nama" class="form-control" placeholder="Nama">
        							  </div>
                        <div class="form-group">
                          <label for="text">Jenis Wakaf</label>
                          <input type="text" name="jenis_wakaf" class="form-control" placeholder="Jenis Wakaf">
                        </div>

        							  <div class="form-group">
        							    <label for="text">Nominal</label>
                          <input type="text" name="nominal" class="form-control" placeholder="Nominal">
        							    <!-- <textarea class="form-control rounded-0" name="nominal"  placeholder="Nominal"></textarea> -->
        							  </div>

        							  <div class="form-group">
        							    <label for="text">Jenis Transfer</label>
        							    <input type="text" name="bank" class="form-control" >
        							  </div>

        							  <div class="form-group">
        							    <label for="text">Foto</label>
        							    <input type="file" name="gambar" class="form-control" >
        							  </div>

        						<button type="submit" class="btn btn-md btn-success">Simpan</button>
        					  <button type="reset" class="btn btn-md btn-warning">reset</button>
        						</form>
        					<?php echo form_close() ?>
        					</div>
        				</div>
          <!-- /.box -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  $this->load->view('footer')
?>