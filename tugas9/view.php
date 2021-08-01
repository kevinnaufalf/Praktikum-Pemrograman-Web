<!DOCTYPE html>
<html>
    <head>
        <title>View database</title>
    </head>
    <body>
    [<a href="form.php">tambah</a>]
        <table border="1">
            <tr>
                <thead>
                    <td>No.</td>
                    <th>Mata Kuliah</th>
                    <th>Hari </th>
                    <th>Jam </th>
                    <th>Ruangan</th>
                </thead>
            </tr>
            <tbody>
                <?php
                $no = 1;
                include "koneksi.php";
                $a = "SELECT * FROM jadwal";
                $b = $konek->query($a);
                while($c=$b->fetch_array()){
                    ?>
                    <tr>
                        <th><?php echo $no++; ?></th>
                        <th><?php echo $c['id_matkul']; ?></th>
                        <th><?php echo $c['hari']; ?></th>
                        <th><?php echo $c['jam']; ?></th>
                        <th><?php echo $c['ruang']; ?></th>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>