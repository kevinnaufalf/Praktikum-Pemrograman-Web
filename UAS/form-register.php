<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
	<form action="aksi-register.php" method="POST">
		<table>
			<tr>
				<td>REGISTER</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" required="">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" required="">
				</td>
			</tr>
			<tr>
				<td>Ulangi Password</td>
				<td>
					<input type="password" name="cekpassword" required="">
				</td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>
					<input type="text" name="nama" required="">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email" required="">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" required="">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="" value="Register">
					<input type="reset" name="" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
