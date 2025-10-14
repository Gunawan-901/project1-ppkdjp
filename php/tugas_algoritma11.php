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
        $modulus = $angka % 2;

        if ($modulus == 0) {
            $genapGanjil = "true";
        } else {
            $genapGanjil = "false";
        }

        echo "<p>Input: <b>$angka</b> adalah angka <b>$genapGanjil</b> dengan hasil modulus 2 = <b>$modulus</b>.</p>";
    }
    ?>
</body>

</html>