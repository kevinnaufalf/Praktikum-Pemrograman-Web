<?php 
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$cek_login = $conn->query($query);

if($cek_login == true){
	header('location: admin.php');
}else {
	echo "
		<script>
		alert('Maaf username dana password yang anda masukkan salah');
		window.location.href = ('login-admin.php');
		</script>
		";	
}