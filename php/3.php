<?php 
// array: tipe data atau struktur data
// lebih dari 1 data

$keranjang = "semnagka, melon, alpukat";
$keranjang_array = ["semangka", "melon", "alpukat"];
// $keranjang_array = array("","")

//$keranjang_array[] = "pisang";
//$keranjang_array[] = "nanas";
array_push($keranjang_array,"pisang", "nanas");

echo "keranjang : " . $keranjang . "<br>";
print_r($keranjang_array);
echo "<br>";
echo "saya mau buah : " . $keranjang_array[2] . "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Array Assosiative</h1>";
$peserta = 
[
   [
       "nama" => "soelatun",
        "umur" => 30,
        "kelas" => "web Programing",
   ], 
[

    "nama" => "beni",
    "umur" => 27,
   "kelas" => "web Programing",
],
];

print_r($peserta);
echo "<br>";


foreach($peserta as $key => $siswa) {
    echo "<br>";
    echo $siswa['nama'] . " ini adalah index ke " . $key;
}

echo "Nama Peserta :" . $peserta[0]['nama'] . "<br>";
echo "umur :" . $peserta[0]['umur'] . "<br>";
echo "kelas :" . $peserta[0]['nama'] . "<br>";