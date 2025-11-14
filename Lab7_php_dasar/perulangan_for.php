<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perulangan for</title>
</head>
<body>
    <h2>Perulangan for (1 sampai 10)</h2>

    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Perulangan ke-$i<br>";
        }

        echo "<hr>";

        echo "Perulangan menurun dari 10 ke 1<br>";
        for ($i = 10; $i >= 1; $i--) {
            echo "Perulangan ke-$i<br>";
        }
    ?>
</body>
</html>