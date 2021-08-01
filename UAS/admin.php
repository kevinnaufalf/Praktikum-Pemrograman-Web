<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
	<style type="text/css">
		.edit{
			width: 55px;
			height: 30px;
			background: blue;
		}
		.delete{
			width: 55px;
			height: 30px;
			background: red;
		}
		.edit,.delete{
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 7px;
		}
		a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<?php include 'aksi-admin.php'; ?>
	<form action="aksi-admin.php" method="POST">
		<h2>Form Penambahan dan Edit</h2>
		<table>
			<?php 
			if ($update == true):
			 ?>
			<tr><input type="hidden" name="id" value="<?php echo $id; ?>"></tr>
			<?php else: ?>
			<tr>
				<td>ID Barang</td>
				<td><input type="text" name="id" value="<?php echo $id; ?>"></td>
			</tr>
			<?php endif; ?>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nm_barang" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
				<td>Berat Barang (Kg)</td>
				<td><input type="text" name="jl_barang" value="<?php echo $stok; ?>"></td>
			</tr>
			<tr></tr>
			<tr>
				<td></td>
				<td>
					<?php 
					if ($update == true):
					 ?>
					 <button type="submit" name="update">Edit</button>
					 <?php else: ?>
					<button type="submit" name="save">Tambah Barang</button>
				<?php endif; ?>
				<button type="submit" name="logout">Logout</button>
				</td>
			</tr>
		</table>
	</form>


	<h3>Tabel Stok Barang</h3>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Stok (Kg)</th>
			<th colspan="2">Action</th>
		</tr>
		<?php  
		$no = 1;
		$query = "SELECT * FROM barang";
		$result = $conn->query($query);
		while($row = $result->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nm_barang']; ?></td>
				<td><?php echo $row['stok']; ?></td>
				<td>
					<a href="admin.php?edit=<?php echo $row['id']; ?>" class="edit" >Edit</a>
				</td>
				<td>	
					<a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete" >Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>