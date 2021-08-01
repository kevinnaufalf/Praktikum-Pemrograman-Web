<?php
include_once('../koneksi.php');
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Barang</title>
</head>
<body>
        <h1>Tambahkan Barang</h1>
        <?php if ($_SESSION['level'] == 'admin') : ?>
            <table>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <tr>
                        <td><label for="item_name">Nama Barang</label></td>
                        <td><input type="text" name="item_name"></td>
                    </tr>
                    <tr>
                        <td><label for="stock">Stok Barang</label></td>
                        <td><input type="number" name="stock" id=""></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="create">Tambah</button></td>
                        <td><a href="index_dtbarang.php">BACK</a></td>
                    </tr>
                </form>
            </table>
            <?php 
            else : 
                echo '<h2>TIDAK BISA MENGAKSES</h2>';
                echo '<a href="../home.php">Kembali</a>';
            exit;
        endif;
?>
</body>
</html>

<?php
if (isset($_POST['create'])) {
    $itemName = $_POST['item_name'];
    $stock = $_POST['stock'];

    $query = "SELECT * FROM barang WHERE nama = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $itemName);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $updatedStock = $result['stock'] + $stock;

    $sql = '';
    if ($result) {
        $sql = "UPDATE barang SET stock = '$updatedStock' WHERE name = '$itemName' ";

    }else{
        $sql = "INSERT INTO barang(nama,stock) VALUES('$itemName','$stock')";
    }    
    if ($conn->query($sql) == TRUE) {
        echo "<script> alert('Data Berhasil di Tambah!!')</script>";
        header('location:index_dtbarang.php');
    } else {
        echo "Error : " . $sql . "<br> " . $conn->error;
    }
}



