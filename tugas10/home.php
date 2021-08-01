<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>
<body>
    <?php
    if (isset($_SESSION['username'])) {
        echo '<h2>Selamat Datang ' . $_SESSION['nama'] . 
         
        '<br> Anda Mengakses Sebagai ' . $_SESSION['level'] . '</h2>';
        if ($_SESSION['level'] == 'admin') {
            echo '<a href="data_barang/index_dtbarang.php">Menu Stok Barang<br></a>';
            echo '<a href="data_pembelian/index_dtpembelian.php">Data Penjualan<br></a>';
        } else if ($_SESSION['level'] == 'pengguna') {
            echo '<a href="data_penjualan/index_dtpenjualan.php">Menu Pembelian<br></a>';
        }
    ?>
        <a href="user/logout.php" onclick="return confirm('Apakah anda yakin?')">Logout</a>
    <?php
    } else {
        echo '<h2>Silahkan login terlebih dahulu!</h2>';
        echo '<a href="user/login.php">Login</a>';
    }
    ?>
</body>
</html>

