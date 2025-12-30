<?php
session_start();
$name = "";
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    if($name != ""){
       $_SESSION["name"] = $name;
        if(isset($_POST["remember"])){
            setcookie("name" , $name , time()+86400);
            echo "your info is saved for one day";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practicing session</title>
</head>
<body>
   <?php 
   if(isset($_SESSION["name"]) && $_SESSION["name"] !== ""){
    echo "wolcome too you";
   }
   elseif(isset($_COOKIE["name"]) && $_COOKIE["name"] !== ""){
    echo "welcome back";
   }
   else{?>
    <form  method="post">
        <input type="text" name="name">
        <label for="remember">
            <input type="checkbox" name="remember" id="">
            Remember me
        </label>
        <input type="submit" value="submit" name= "submit">

    </form>
   <?php
   }
    ?> 
</body>
</html>