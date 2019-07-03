<!DOCTYPE html>
<html>
<title>Belajar CI</title>
<body>

<h1>Tambah Data</h1>
<?php echo form_open_multipart('c_wakaf/input');?>
judul <input type="text" name="judul"><br><br>
artikel <input type="number" name="artikel"><br><br>
tgl <input type="date" name="tgl"><br><br>
Gambar <input type="file" name="gambar"><br><br>
<button type="submit">tambah</button>
<?php echo form_close();?>
</body>
</html>