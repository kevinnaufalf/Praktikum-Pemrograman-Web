<?php
include_once('../koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Form</title>
</head>
<body>
    <center>
    <h1>LOGIN FORM</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username" reuquired></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="login">Login</button></td>
                <td><a href="register.php" style="text-align: right   ;">Registrasi</a></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>
<?php
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT *FROM user WHERE username = '$username' and password = '$password'";
    $query = $conn->query($sql);
    if (mysqli_num_rows($query) == 1){
        $data = $query->fetch_array();
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['level'] = $data['level'];
        header('location:../home.php');
    }else{
        echo "<script>alert ('ERRORRR !!! Password atau username yang anda masukkan salah')</script>";
    }
}
?>

