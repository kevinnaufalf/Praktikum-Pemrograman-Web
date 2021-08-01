<?php
$nilai1 = $_POST['bil1'];
$nilai2 = $_POST['bil2'];
$rata = 0;

if ($nilai1 != null && $nilai2 != null) {
    $rata = ($nilai1 + $nilai2) / 2;
} else if ($nilai1 == null || $nilai2 == null) {
    echo "
    <script>
    alert('Nilai Belum Dimasukkan');
    </script>
    ";
}