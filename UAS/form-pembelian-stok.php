<!DOCTYPE html>
<html>
<head>
	<title>Pembelian</title>
</head>
<body>
	<?php include 'aksi-pembelian.php'; ?>
	<form action="aksi-pembelian.php" method="POST">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>ID Barang</td>
				<td>
					<select name="nama_barang">
						<?php  
						$no = 1;
						$query = "SELECT * FROM barang";
						$result = $conn->query($query);
						while($row = $result->fetch_array()) { ?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?> -> <?php echo $row['nm_barang']; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td>
					<select name="nm_barang">
						<?php  
						$no = 1;
						$query = "SELECT * FROM barang";
						$result = $conn->query($query);
						while($row = $result->fetch_array()) { ?>
							<option value="<?php echo $row['nm_barang']; ?>"><?php echo $row['nm_barang']; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah Pembellian</td>
				<td>
					<input type="text" name="jumlah_pembelian">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="beli">Beli</button></td>
			</tr>
		</table>
	</form>
</body>
</html>