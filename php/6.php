

<?php

function panggilaku($nama)
{
    //global $nama
    // echo "";
    return "halo aku $nama dari masa depan <br>";
}

echo panggilaku("marwatun");
echo panggilaku("darda");
echo panggilaku("Rudi");
echo panggilaku("yandi");


$users = [[
    "id" => 12343,
    "name" => "Roni"
],[
    "id" => 54321,
    "name" => "sisu"
]];

array_push($users, ["id" => 444, "name" => "Galuh"]);


foreach ($users as $user){
?>
<ul>
    <li>ID USER :<?php echo $user["id"]?></li>
    <li>NAME :<?php echo $user["name"]?></li>
</ul>
<?php 
}
?>

<?php 
$string = "saya sedang mengaji, jangan di ganggu";

$substr = substr($string,4);
echo $substr . "<br>";

//srtlen
$strlen = strlen($string);
echo $strlen . "<br>";

$str_word_count = str_word_count($string);
echo $str_word_count . "<br>";

$ucwords = ucwords($string);
echo $ucwords . "<br>";


$ucfirst = ucfirst($string);
echo $ucfirst . "<br>";





?>
