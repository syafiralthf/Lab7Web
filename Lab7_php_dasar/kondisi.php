<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struktur Kondisi PHP</title>
</head>
<body>
    <h2>Struktur Kondisi IF dan SWITCH</h2>

    <?php
        $nama_hari = date("l");

        echo "<h3>Contoh IF:</h3>";
        if ($nama_hari == "Sunday") {
            echo "Sekarang hari Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Sekarang hari Senin";
        } elseif ($nama_hari == "Tuesday") {
            echo "Sekarang hari Selasa";
        } else {
            echo "Sekarang bukan Minggu, Senin, atau Selasa";
        }

        echo "<hr>";

        echo "<h3>Contoh SWITCH:</h3>";
        switch ($nama_hari) {
            case "Sunday":
                echo "Hari ini Minggu";
                break;
            case "Monday":
                echo "Hari ini Senin";
                break;
            case "Tuesday":
                echo "Hari ini Selasa";
                break;
            default:
                echo "Hari ini hari lain";
                break;
        }
    ?>
</body>
</html>