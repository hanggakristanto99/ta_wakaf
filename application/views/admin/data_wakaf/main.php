<?php 
  $this->load->view('header')
?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url() ?>C_home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>c_wakaf"><i class="fa fa-circle-o"></i> Wakaf</a></li>
        <li><a href="<?php echo base_url() ?>c_berita"><i class="fa fa-circle-o"></i> Berita</a></li>
        <li><a href="<?php echo base_url() ?>c_pewakaf"><i class="fa fa-circle-o"></i> Data Donatur</a></li>
        <li class="active"><a href="<?php echo base_url() ?>c_data_pewakaf"><i class="fa fa-circle-o"></i> Data Wakaf</a></li>
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
                  <?php echo $this->session->flashdata('notif') ?>
      <div class="float-right">
      <a href="<?php echo base_url() ?>C_buku/i" class="btn btn-md btn-success">Tambah Buku</a>
        
      </div>

                  

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
              <th>Judul</th>
              <th>Tebal</th>
              <th>Penerbit</th>
              <th>Foto</th>
              <th>Edit</th>
              <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
            $no = 1; 
            foreach($wakaf as $row){ 
          ?>
                <tr>
              <td><?php echo $no?></td>
          <td><?php echo $row->judul;?></td>
          <td><?php echo $row->artikel;?></td>
          <td><?php echo $row->tgl;?></td>
          <td>
          <?php if($row->gambar==''){}else{?>

            <img style="width:50px;height:30px;" src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>">
          <?php }?>
          </td>
              <td>
            <a href="<?php echo base_url() ?>C_buku/e/<?php echo $row->id ?>" class="btn btn-sm btn-success text-center">Edit</a>
              </td>
              <td>
                <a href="<?php echo base_url() ?>C_buku/hapus/<?php echo $row->id ?>" class="confirmClick text-center btn btn-sm btn-danger">Hapus</a>
                
              </td>
            </tr>
          <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
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
  <?php 
  $this->load->view('footer')
?>