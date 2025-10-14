<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Table</title>


<style>
tr, td{
    width: 40px;
    height: 40px;
    border: 1px solid black;
}


</style>


</head>
<body>
<table border="1" >
    <?php 
    for ($i = 1; $i<= 5; $i++) {
?>
        <tr>
            <?php 
            for ($x = 1; $x <= 5; $x++){
               if(($i + $x) % 2 == 0){
                $w = "red";
                
               }else {
                $w="white";
               }
                ?>


                <td style="background-color: <?php echo $w ?>;"><?php echo $i . "," . $x ?></td>
                <?php 
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>  <br>

<table>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                // Pola merah-putih berdasarkan jumlah baris + kolom
                if (($i + $j) % 2 == 0) {
                    // Jika genap → merah
                    echo "<td style='background-color: red; color: white;'>$i,$j</td>";
                } else {
                    // Jika ganjil → putih
                    echo "<td style='background-color: white; color: black;'>$i,$j</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table> <br>


    



</body>
</html>