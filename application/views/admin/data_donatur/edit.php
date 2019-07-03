<!DOCTYPE html>
<html>
<title>Belajar CI</title>
<body>

<h1>Edit Data</h1>
<?php 
foreach($data_wakaf as $row){
echo form_open_multipart('admin/c_data_donatur/edit');?>
nama <input type="text" name="nama" value="<?php echo $row->nama;?>"><br><br>
email <input type="text" name="email" value="<?php echo $row->email;?>"><br><br>
telpon <input type="text" name="telpon" value="<?php echo $row->telpon;?>"><br><br>
password <input type="text" name="password" value="<?php echo $row->password;?>"><br><br>
<br>

<input type="hidden" name="id" value="<?php echo $row->id;?>">
<button type="submit">Edit</button>
<?php echo form_close();
}
?>
</body>
</html>