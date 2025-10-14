<!--looping = struktur kode yang digunakan untuk menjalankan blok kode selama kondisi tertentu terpenuhi -->

<!-- For -->
 <?php 
 for ($i =1; $i < 10; $i++):
    echo $i . ". saya tidak akan terlambat lagi <br>";
 endfor;

echo "<br><br>";
$a = 2;
while ($a <= 10) {
    echo $a . " .Aku minta maaf <br>";
    $a++;
}

echo "<br><br>";

$j = 1;
do {
    echo $j . " .Aku Minta Maaf <br>";
    $j++;

} while ($j <= 10);

echo "<br><br>";
for ($x=1; $x <= 10; $x++){
    if ($x == 5) {
        break;
    }
    echo $x . "<br>";
}



    ?>