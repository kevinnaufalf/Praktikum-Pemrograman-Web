<html>
    <head>
        <title>Buku Tamu</title>
        
    </head>
    <body>
        <h3>Buku Tamu</h3>
        <table border="1">
            <tr>
                <td>No</td>
                <td>ID_Mahasiswa</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Komentar</td>
            </tr>
            
            <?php
            include 'koneksi.php';
            $no = 1;
            $query = "SELECT * FROM bukutamu";
            $result = $conn->query($query);
            while ($row = $result->fetch_array()) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['id_bukutamu']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['komentar']; ?></td>
                </tr>
            <?php } ?>    
        </table>
    </body>
</html>