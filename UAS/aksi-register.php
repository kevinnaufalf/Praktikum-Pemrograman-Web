<?php 
include('connection.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$cekpassword = md5($_POST['cekpassword']);
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

if($password == $cekpassword){
	$query = "INSERT INTO pelanggan (username,password,email,nama_lengkap,alamat) VALUES ('".$username."', '".$password."', '".$email."', '".$nama."', '".$alamat."')";
	$insert = $conn->query($query);
	if($insert === true){
		echo "
		<script>
		alert('Anda Sukses Registrasi');
		window.location.href = ('login-pelanggan.php');
		</script>
		";	
	}else{
		echo "
		<script>
		alert('Registrasi Gagal, Coba Kembali');
		window.location.href = ('login-pelanggan.php');
		</script>
		";	
	}
}else{
	echo "
	<script>
	alert('Ulangi, Password Anda tidak sama');
	window.location.href = ('login-pelanggan.php');
	</script>
	";
}