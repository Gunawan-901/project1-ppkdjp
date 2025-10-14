<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="Nama">Masukan Nilai Anda</label>
<form action="" method="post" enctype="multipart/form-data">
    <label for="">Nama</label>
    <input type="text" name="Nama" placeholder="Isi Nama Anda">
    <input type="file">

    <button type="submit" name="kirim">Kirim</button>
</form>




</body>
</html>

<?php 
if (isset($_POST["kirim"])) {
$nama = $_POST["Nama"];
    echo "nama Saya Adalah " . $nama;
}

?>