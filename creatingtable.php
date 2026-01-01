<?php
$localhost = "localhost:3306";
$username = "root";
$password = "";
$db = "mydb";
$connection = mysqli_connect($localhost, $username , $password , $db);

if(!$connection){
    die("connection failed");
}

$sql = "CREATE TABLE `student`(`first name` VARCHAR(20), `last name` VARCHAR(20), `gender` VARCHAR(10), `age` INT(3), `email` VARCHAR(30), `message` TEXT)";
$sqlcon = mysqli_query($connection , $sql);

if($sqlcon){
    echo "tabble is created";
}else{
    echo "error". mysqli_error($connection);
}