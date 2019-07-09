<?php 
  $this->load->view('header')
?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url() ?>admin/c_home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>admin/c_wakaf"><i class="fa fa-circle-o"></i> Wakaf</a></li>
        <li><a href="<?php echo base_url() ?>admin/c_berita"><i class="fa fa-circle-o"></i> Berita</a></li>
        <li class="active"><a href="<?php echo base_url() ?>admin/c_pewakaf"><i class="fa fa-circle-o"></i> Data Donatur</a></li>
        <li><a href="<?php echo base_url() ?>admin/c_pewakaf"><i class="fa fa-circle-o"></i> Data Pewakaf</a></li>
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
       Data Donatur
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                  <?php echo $this->session->flashdata('notif') ?>
      <div class="float-right">
      <a href="<?php echo base_url() ?>admin/c_data_donatur/input" class="btn btn-md btn-success">Tambah Data Donatur</a>
        
      </div>
<br>
                  

              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>password</th>
                    <th>level</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $no = 1; 
                  foreach($data_donatur as $row){ 
                ?>
                      <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $row->username;?></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->password;?></td>
                <td><?php echo $row->level;?></td>
              <td>
            <a href="<?php echo base_url() ?>admin/c_data_donatur/edit/<?php echo $row->uid ?>" class="btn btn-sm btn-success text-center">Edit</a>
              </td>
              <td>
                <a href="<?php echo base_url() ?>admin/c_data_donatur/hapus/<?php echo $row->uid ?>" class="confirmClick text-center btn btn-sm btn-danger">Hapus</a>
                
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
  <!-- /.content-wrapper -->
<?php 
  $this->load->view('footer')
?>