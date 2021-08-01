<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="aksi-login-pelanggan.php" method="POST">
		<table>
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
				<td></td>
				<td>
					<input type="submit" name="" value="Login">
					<input type="reset" name="" value="Reset">
				</td>
			</tr>
			<tr>
                <td>Belum Memiliki akun?</td>
                <td><a href="form-register.php">Register</a></td>
            </tr>
		</table>
	</form>
</body>
</html>