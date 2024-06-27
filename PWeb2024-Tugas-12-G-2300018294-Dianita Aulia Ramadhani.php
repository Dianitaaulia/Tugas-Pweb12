<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Ujian Beserta Jawabannya</title>
    <link rel="stylesheet" href="fungsi.css">
</head>
<body>
    <b>Soal Ujian Beserta Jawabannya</b><br><br>
<?php
include 'fungsi.php';
$a=1;
$b=100;
echo "<b>Bilangan ganjil dari $a sambil $b, adalah: </b><br>";
echo "<b>Jawab: </b><br>";
ganjil();
echo "<br><br>";

$r=50;
echo "<b>Luas lingkaran dengan jari-jari 50 cm, adalah: </b><br>";
echo "<b>Jawab: </b><br>";
echo lingkaran($r)," cm²";
?>
</body>
</html>