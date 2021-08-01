<?php
$a = $_POST['bil1'];
$b = $_POST['bil2'];

$c = $a * $b;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>

</head>

<body>
    <form action="latihan.php" method="post">
        <h4>Panjang</h4>
        <input type="text" name="bil1">
        <br>
        <h4>Lebar</h4>
        <input type="text" name="bil2">
        <br>
        <button type="submit">Hasil</button>
        <button type="reset">Reset</button>
    </form>

    <h4>Hasil</h4>
    <input type="text" value="<?php echo $c; ?>">
</body>

</html>