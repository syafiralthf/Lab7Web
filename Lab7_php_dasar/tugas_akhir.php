<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Akhir PHP Dasar</title>
</head>
<body>
    <h2>Form Data Diri</h2>

    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label>Pekerjaan:</label>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Pengacara">Pengacara</option>
            <option value="Dokter">Dokter</option>
            <option value="Detektif">Detektif</option>
            <option value="Chef">Chef</option>
            <option value="Jurnalis">Jurnalis</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $lahir = new DateTime($tanggal_lahir);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir)->y;

        switch ($pekerjaan) {
            case "Pengacara":
                $gaji = 12000000;
                break;
            case "Dokter":
                $gaji = 10000000;
                break;
            case "Detektif":
                $gaji = 9000000;
                break;
            case "Chef":
                $gaji = 7000000;
                break;
            case "Jurnalis":
                $gaji = 8000000;
                break;
            default:
                $gaji = 0;
        }

        echo "<h3>Hasil Data:</h3>";
        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: " . date('d-m-Y', strtotime($tanggal_lahir)) . "<br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
    }
    ?>
</body>
</html>