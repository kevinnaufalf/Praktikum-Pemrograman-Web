<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>

</head>

<body>
    <?php include 'uts2.php'; ?>

    <h4>Penghitung Nilai Akhir Ujian</h4>
    <form action="uts1.php" method="POST">
        <h4>Nilai UTS</h4>
        <input type="text" name="bil1">
        <br>
        <h4>Nilai UAS</h4>
        <input type="text" name="bil2">
        <br>
        <button type="submit">Hasil</button>
        <button type="reset">Reset</button>
    </form>

    <h4>Nilai Akhir Rata-rata</h4>
    <input type="text" value="<?php echo $rata; ?>">
</body>

</html>
    