<?php 
session_start();
session_regenerate_id();

if (empty($_SESSION["email"])){
    header("location:9.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>WELCOME TO THE JUNGLE <?php echo $_SESSION["EMAIL"] ?></h1>
<a href="logout.php">Log Out</a>

</body>
</html>

