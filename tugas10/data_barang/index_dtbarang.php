<?php
include_once('../koneksi.php');
session_start();

$sql = "SELECT * FROM barang";

if ($conn->query($sql)) {
    $items = $conn->query($sql);
} else {
    echo ("Error!!" . $conn->error);
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
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
    if ($_SESSION['level'] == 'admin') :
    ?>
        <a href="../user/logout.php">Logout</a>
        <center>
            <h1> Data Barang </h1> 
            <h4>Toko Elektronik</h4>
        </center>
<a href="tambah_dtbarang.php" >Tambah Barang</a>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Stok Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($items) > 0) {
                        while ($item = mysqli_fetch_array($items)) {
                    ?>
                            <tr>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['nama'] ?></td>
                                <td><?php echo $item['stock'] ?></td>
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
        echo '<h2>ERRORRR TIDAK BISA MENGAKSES</h2>';
        echo '<a href="../home.php">Kembali</a>';
        exit;
    endif
    ?>
</body>
</html>

