<html>
<head>
	<title>Data Mahasiswa</title>
	</head>
	<body>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_update";?>">
		<table>
		<tr>
<td>No Induk</td>
<td><input type="text" name="nim" value="<?php echo $nim; ?>"/></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo $nama; ?>"/></td>
</tr>
<tr>
<td>Alamat</td>
<td><textarea name="alamat"><?php echo $nama; ?></textarea></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="btnSubmit" value="Simpan"></td>	
</tr>		
		</table>	
		</form>
	</body>
</html>