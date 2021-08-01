<?php 
include 'connection.php';
$update=false;
$id='';
$name='';
$stok='';

// tambah
if (isset($_POST['save'])) {
	$id=$_POST['id'];
	$nm_barang= $_POST['nm_barang'];
	$jl_barang=$_POST['jl_barang'];

	$query = "INSERT INTO barang (id,nm_barang,stok) VALUES ('".$id."','".$nm_barang."','".$jl_barang."')";
	$insert = $conn->query($query);

	if($insert == true){
	header('location: admin.php');
	}else {
	echo "
		<script>
		alert('ERORR');
		</script>
		";	
	}
}

// hapus
if (isset($_GET['delete'])) {
	$id= $_GET['delete'];

	$query = "DELETE FROM barang WHERE id=$id";
	$delete = $conn->query($query);

	if($delete == true){
	header('location: admin.php');
	}else {
	echo "
		<script>
		alert('ERORR');
		</script>
		";	
	}
}


// edit
if (isset($_GET['edit'])) {
	$id= $_GET['edit'];
	$update=true;

	$query = "SELECT * FROM barang WHERE id=?";
	$edit = $conn->prepare($query);
	$edit -> bind_param("i",$id);
	$edit->execute();
	$result=$edit->get_result();
	$row=$result->fetch_assoc();

	$id=$row['id'];
	$name=$row['nm_barang'];
	$stok=$row['stok'];
}
 

// update
if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$nm_barang=$_POST['nm_barang'];
	$jl_barang=$_POST['jl_barang'];

	$query="UPDATE barang SET nm_barang='$nm_barang',stok='$jl_barang' WHERE id='$id'";
	$stmt=$conn->query($query);

	echo $id;
	echo $nm_barang;
	echo $jl_barang;
	
	if ($stmt == true) {
		header('location:admin.php');
	}else{
		echo "<script>alert('Error');</script>";
	}
	
}

if (isset($_POST['logout'])){
	header('location:index.php');
}


 ?>