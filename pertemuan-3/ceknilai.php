<html>

<head>
    <title>Form Penilaian</title>
</head>

<body>

    <h2>Masukkan Nilai Anda</h2>

    <!-- Form input nilai -->
    <form method="POST" action="">
        <label for="nilai">Nilai:</label>
        <input type="number" id="nilai" name="nilai" required>
        <br><br>
        <button type="submit">Kirim</button>
    </form>

    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari inputan user
        $nilai = $_POST['nilai'];

        // Cek logika nilai
        if ($nilai >= 65) {
            echo "<span style='color:green;'>Lulus</span>";
        } else if ($nilai >= 50 && $nilai < 65) {
            echo "<span style='color:yellow;'>Harus Mengulang</span>";
        } else {
            echo "<span style='color:red;'>Tidak Lulus</span>";
        }
    }
    ?>

</body>

</html>