<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coba php program sederhana</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <label for="">Nilai</label>
    <input type="text" name="nilai" placeholder="Berapa nilaimu">

    <button type="submit" name="kirim">Proses</button>

  </form>
</body>

</html>

<?php
$nilai = 100;
if (isset($_POST["nilai"])) {
  $nilai = $_POST["nilai"];
}

if ($nilai >= 90 && $nilai <= 100) {
  $grade = "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
  $grade = "B";
} elseif ($nilai >= 70 && $nilai <= 79) {
  $grade = "C";
} elseif ($nilai >= 60 && $nilai <= 69) {
  $grade = "D";
} elseif ($nilai >= 0 && $nilai <= 59) {
  $grade = "E";
} 

if ($nilai >= 70) {
  $status = "Lulus Jadi Beban Negara";
} else {
  $status = "Mampus Ga LULUS !!!";
}

echo "Nilaimu : $nilai<br>";
echo "Grademu : $grade<br>";
echo "Statusmu : $status<br>";

?>