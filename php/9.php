<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 pehapwe</title>
</head>

<body>
    
    <form action="" method="post">
        <label for="">Email</label><br>
        <input type="email" name="email" required><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit" name="login">Login</button>
<?php 

if (isset($_SESSION["email"])){
    echo "<a href='dashboard.php'>home</a>";
}
?>

    </form>
</body>

</html>

<?php
session_start();
session_regenerate_id();
if (isset($_POST["login"])) {
    $inputkanemail = htmlspecialchars($_POST["email"]);
    $inputkanpassword = htmlspecialchars($_POST["password"]);
    
    //echo $_POST["password"];

    $users = [[
        "email" => "gugunwibs@gmail.com", 
          "pass" => "12345"
        ],
          ["email" => "jumatunw@gmail.com", 
          "pass" => "123456"
        ],
    
        ["email" => "sulatri@gmail.com", 
          "pass" => "1234555"
        ],];

    
    foreach ($users as $user){

        if ($inputkanemail == $user["email"] &&
        $inputkanpassword == $user ["pass"]) {
        $_SESSION["EMAIL"] = $user ["email"];
        
        header("location:dashboard.php");
    } else {
        echo "Login Gagal";
        //header("location:9.php");
    }
    break;
}


}
