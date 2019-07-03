<!DOCTYPE html>
<html>
<title>Belajar CI</title>
<body>

<h1>Edit Data</h1>
<?php 
foreach($data_wakaf as $row){
echo form_open_multipart('c_wakaf/edit');?>
judul <input type="text" name="judul" value="<?php echo $row->judul;?>"><br><br>
artikel <input type="text" name="artikel" value="<?php echo $row->artikel;?>"><br><br>
tgl <input type="date" name="tgl" value="<?php echo $row->tgl;?>"><br><br>
<?php 
if($row->gambar==''){?>
	<label>Belum Ada Gambar</label><br>
<?php }else{ ?>
	<img src="<?php echo base_url('uploads/thumbnail/'.$row->gambar)?>"><br>
<?php }?>
Ubah Gambar <input type="file" name="gambar">
<br><br>

<input type="hidden" name="id" value="<?php echo $row->id;?>">
<button type="submit">Edit</button>
<?php echo form_close();
}
?>
</body>
</html>