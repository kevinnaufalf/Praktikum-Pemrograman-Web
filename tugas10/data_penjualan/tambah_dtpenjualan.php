<?php
include_once('../koneksi.php');
session_start();
$items = $conn->query("SELECT * FROM barang");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Barang</title>
</head>
<body>
        <h2>Pembelian Barang</h2>
        <?php if ($_SESSION['level'] == 'pengguna') : ?>
            <table>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <tr>
                        <td><label for="item_name">Nama Barang</label></td>
                        <td>
                            <select name="item_id" id="">
                            <?php
                            while ($item = mysqli_fetch_array($items)) {
                                echo "<option value='" . $item['id'] . "' >" . $item['nama'] 
                                ." (stock : ".$item['stock'].")". "</option>";
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="penjualan">Jumlah Pembelian</label></td>
                        <td><input type="number" name="penjualan" id=""></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="create">Tambah</button></td>
                        <td><a href="index_dtpenjualan.php">BACK</a></td>
                    </tr>
                </form>
            </table>
            <?php 
            else : 
                echo '<h2>TIDAK BISA MENAGKSES</h2>';
                echo '<a href="../home.php">Kembali</a>';
            exit;
        endif;
        ?>
</body>
</html>
<?php
if (isset($_POST['create'])) {
    $itemId = $_POST['item_id'];
    $penjualan = $_POST['penjualan'];

    $sql = "INSERT INTO penjualan(item_id,penjualan) VALUES('$itemId','$penjualan')";
    if ($conn->query($sql) == TRUE) {
        echo "<script> alert('Data Berhasil di Tambah!!')</script>";
        header('location:index_dtpenjualan.php');
    } else {
        echo "Error : " . $sql . "<br> " . $conn->error;
    }
}

