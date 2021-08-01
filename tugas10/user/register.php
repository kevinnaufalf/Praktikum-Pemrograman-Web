<?php
include_once('../koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <center>
    <h1>Form Registrasi</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td><input type="text" name="nama" id="" required></td>
            </tr>
            <tr>
                <td><label for="level">Level</label></td>
                <td>
                    <select name="level" id="">
                        <option value="admin">Admin</option>
                        <option value="pengguna">Pengguna</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Register</button></td>
                <td><a href="login.php">Login</a></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $level = $_POST['level'];

    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "INSERT INTO user(username,password,nama,level) 
    VALUES ('$username','$password','$nama','$level')";
    
    if ($conn->query($sql)== TRUE){
        echo "Account Created Successfully";
    }else{
        echo "Errorr: ".$sql. "<br>".$conn->error;
    }
}
?>

