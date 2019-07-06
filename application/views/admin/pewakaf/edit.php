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
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        				<div class="row">
        					<div class="col-md-12">
        							<?php 
									foreach($data_pewakaf as $row){
        						 echo form_open_multipart('admin/c_pewakaf/edit') ;?>
        						<form>
        						  <div class="form-group">
        							    <label for="text">Nama</label>
        							    <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $row->nama;?>">
        							  </div>

        							  <div class="form-group">
        							    <label for="text">Jenis Wakaf</label>
        							    <textarea type="text" name="jenis_wakaf" class="form-control" placeholder="Jenis wakaf"><?php echo $row->jenis_wakaf;?></textarea>
        							  </div>

        							  <div class="form-group">
        							    <label for="text">Nominal</label>
        							    <input type="text" name="nominal" class="form-control"  value="<?php echo $row->nominal;?>">
        							  </div>
                        <div class="form-group">
                          <label for="text">Bank</label>
                          <input type="text" name="bank" class="form-control"  value="<?php echo $row->bank;?>">
                        </div>

        							  <div class="form-group">
        							    <label for="text">Gambar</label>
        							    <?php 
											if($row->gambar==''){?>
												<label>Belum Ada Gambar</label><br>
											<?php }else{ ?>
												<img src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>"><br>
											<?php }?>
											Ubah Gambar <input type="file" name="gambar" class="form-control">
        							  </div>
        							  <input type="hidden" name="id" value="<?php echo $row->id;?>">
        						<button type="submit" class="btn btn-md btn-success">Simpan</button>
        					  <button type="reset" class="btn btn-md btn-warning">reset</button>
        						</form>
        					<?php echo form_close(); }?>
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