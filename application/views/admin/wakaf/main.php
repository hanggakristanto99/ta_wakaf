<?php 
  $this->load->view('header')
?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo base_url() ?>admin/c_home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url() ?>admin/c_wakaf"><i class="fa fa-circle-o"></i> Wakaf</a></li>
        <li><a href="<?php echo base_url() ?>admin/c_berita"><i class="fa fa-circle-o"></i> Berita</a></li>
        <li><a href="<?php echo base_url() ?>admin/c_data_donatur"><i class="fa fa-circle-o"></i> Data Donatur</a></li>
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
       Data Wakaf
      </h1>
    </section>
<!-- Button trigger modal -->





    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                  <?php echo $this->session->flashdata('notif') ?>
      <div class="float-right">
      <a href="<?php echo base_url() ?>admin/c_wakaf/i" class="btn btn-md btn-success">Tambah Data Wakaf</a>
        
      </div>
            <br>

              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
              <th>Jenis Wakaf</th>
              <th>Deskripsi</th>
              <th>Waktu</th>
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
              <td><?php echo $no++?></td>
          <td><?php echo $row->judul;?></td>
          <td><?php echo $row->artikel;?></td>
          <td><?php echo date("d F Y", strtotime($row->tgl));?></td>
          <!-- <td><?php echo date("l, d-F-Y", strtotime($row->tgl));?></td> -->
          <td>
          <?php if($row->gambar==''){}else{?>


            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <img class="gambar1"  src=""  style="width:100%;max-width:100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <img class="gambar" data-toggle="modal" data-target="#exampleModal" data="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>" src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>" alt="Snow" style="width:100%;max-width:300px">
            <!-- <img style="width:50px;height:30px;" src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>"> -->
          <?php }?>
          </td>
              <td>
            <a href="<?php echo base_url() ?>admin/c_wakaf/e/<?php echo $row->id ?>" class="btn btn-sm btn-success text-center">Edit</a>
              </td>
              <td>
                <a href="<?php echo base_url() ?>admin/c_wakaf/hapus/<?php echo $row->id ?>" class="confirmClick text-center btn btn-sm btn-danger">Hapus</a>
                
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
<script type="text/javascript">
  $(document).ready(function(){
   $('.gambar').click(function(){
      var link=$(this).attr('data');
      $('.gambar1').attr('src',link);

    });
  });
</script>