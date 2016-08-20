<html>
<head>
<title>Data Mahasiswa</title>
</head>
<body>
<table width="200%" height="78" border="1" style="border-collapse:collapse; width:80%">
<tr style="background:gray;">
	<th width="20%">No Induk</th>
	<th width="30%">Nama</th>
	<th width="30%">Alamat</th>
	<th width="30%">Action</th>
</tr>	
<?php foreach($data as $d){?>
<tr>
	<td><?php echo $d['nim']; ?></td>
	<td><?php echo $d['nama']; ?></td>
	<td><?php echo $d['alamat']; ?></td>
	<td align="center">
<a href="#">Edit</a> || 
<a href="#">Hapus</a>	
	</td>
</tr>
<?php } ?>
</table>
<a href="<?php echo base_url()."index.php/crud/add_data"; ?>">Tambah Data</a>
</body>
</html>