<?php
include_once('../koneksi.php');
session_start();

$sql = "SELECT penjualan.id,barang.nama,penjualan  FROM penjualan,barang WHERE penjualan.item_id = barang.id" ;

if ($conn->query($sql)) {
    $purchases = $conn->query($sql);
} else {
    echo ("Error!!" . $conn->error);
    die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Menu Pembelian</title>
</head>
<body>
<style>
        table{
            font-family: comic sans MS, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #dddddd;
        }
    </style>
    <?php
    if ($_SESSION['level'] == 'pengguna') :
    ?>
    <a href="../user/logout.php">Logout</a>
            <h1>Menu Pembelian</h1>
            <a href="tambah_dtpenjualan.php">Tambahkan data</a>
            <table border="1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($purchases) > 0) {
                        while ($purchase = mysqli_fetch_array($purchases)) {
                    ?>
                            <tr>
                                <td><?php echo $purchase['id'] ?></td>
                                <td><?php echo $purchase['nama'] ?></td>
                                <td><?php echo $purchase['penjualan'] ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <a href="../home.php">BACK</a>
    <?php
    else :
        echo '<h2>Tidak dapat diakses!!</h2>';
        echo '<a href="../home.php">Kembali</a>';
        exit;
    endif
    ?>
</body>
</html>
