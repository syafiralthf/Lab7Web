<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Operator PHP</title>
</head>
<body>
    <h2>Operator Aritmatika di PHP</h2>
    <?php
        $gaji = 3000000;
        $pajak = 0.1;
        $gaji_bersih = $gaji - ($gaji * $pajak);

        echo "Gaji sebelum pajak = Rp " . number_format($gaji, 0, ',', '.') . "<br>";
        echo "Pajak (10%) = Rp " . number_format($gaji * $pajak, 0, ',', '.') . "<br>";
        echo "Gaji yang dibawa pulang = Rp " . number_format($gaji_bersih, 0, ',', '.');
    ?>
</body>
</html>