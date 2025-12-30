<?php
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submitting form in database
    </title>
</head>
<body>
    <form action="#" method="POST">
       First name: <input type="text" name="fname" id=""><br>
        last name:<input type="text" name="lname" id=""><br>
<label for="gender">gender</label><br>
       female<input type="radio" value="female" name="gender" id="">
       male<input type="radio" value="male"name="gender" id=""><br>
      age: <input type="text" name="age" id=""><br>
      email<input type="email" name="email" id=""><br>
      message:
    <textarea name="message" id=""></textarea><br>
    <input type="submit" value="submit">

    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        $age  = $_POST["age"];
        $email  = $_POST["email"];
        $message = $_POST["message"];
        include "insertingdata.php";
    }
 
    ?>
</body>
</html>