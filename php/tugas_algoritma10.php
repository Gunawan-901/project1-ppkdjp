<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="post">
        Masukkan angka: <input type="number" name="angka" required>
        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $angka = (int)$_POST['angka'];

        if ($angka > 0) {
            $posNeg = "Positif";
        } elseif ($angka == 0) {
            $posNeg = "Nol";
        } else {
            $posNeg = "Negatif";
        }

        if ($angka % 2 == 0) {
            $genapGanjil = "Genap";
        } else {
            $genapGanjil = "Ganjil";
        }

        echo "<p>Input: $angka adalah angka <b>$posNeg</b> dan <b>$genapGanjil</b>.</p>";
    }
    ?>
</body>

</html>