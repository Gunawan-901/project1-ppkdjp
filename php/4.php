<?php



$nama = "soelatun";
if ($nama == "soelatun") {
    echo "ya";
} else {
    echo "bukan";
}
echo "<br>";


$nilai = 89;
if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

if ($nilai >= 60) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}
echo "Nama : " . $nama . "<br>";
echo "Nilai : " . $nilai . "<br>";
echo "Nilai : " . $grade . "<br>";
echo "Lulus : " . $status . "<br>";

echo "<br><br>";

switch ($warna) {
    case "merah":
        echo "warna favorit merah";
        break;
    case "kuning":
        echo "warna favorit Kuning";
        break;
    case "hijau":
        echo "warna favorit hijau";
        break;
    default:
        echo "Terserah warna apa saja";
        break;
}


