<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style type="text/css">
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		.box,.box1{
			width: 300px;
			height: 370px;
			display: flex;
		}
		.box{
			align-items: center;
			justify-content: center;
		}
		.box1{
			justify-content: space-between;
		}
		a{
			width: 100px;
			height: 50px;
			background: blue;
			color: white;
			text-decoration: none;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 7px;
		}
	</style>
</head>
<body>
	<div class="box">
		<h2>LOGIN</h2>
	</div>
	<div class="box1">
		<a href="login-admin.php">ADMIN</a>
		<a href="login-pelanggan.php">PELANGGAN</a>
	</div>
</body>
</html>