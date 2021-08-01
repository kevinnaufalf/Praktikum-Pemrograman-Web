<!DOCTYPE html>
<html>
    <head>
        <title>Koneksi Database</title>
    </head>
    <body>
        <?php
        $host = "localhost";
        $username = "root";
        $password = "2524";
        $db = "db_akademik";
        $konek = mysqli_connect($host, $username, $password, $db);
        if($konek){
            echo "koneksi berhasil";
        }else{
            echo "belum terkonek";
        }
        ?>
    </body>
</html>