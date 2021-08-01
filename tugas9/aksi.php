<?php
include('koneksi.php');

$id_matkul = $_POST['id_matkul'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruang = $_POST['ruang'];

$query = "INSERT INTO jadwal (id_matkul,hari,jam,ruang) VALUES (".$id_matkul.",'".$hari."','".$jam."','".$ruang."')";
$a = $konek->query($query);

if($a == true) {
    header('location: view.php');
} else {
    echo "
        <script>
        alert('ERROR');
        </script>
        ";
}