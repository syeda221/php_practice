<?php
$localhost = "localhost:3306";
$username = "root";
$password = "";
$db = "mydb";
$connection = mysqli_connect($localhost, $username , $password , $db);

if(!$connection){
    die("connection failed");
}

$sql = "CREATE TABLE user(id INT PRIMARY KEY , name VARCHAR(20) NOT NULL)";
$sqlcon = mysqli_query($connection , $sql);

if($sqlcon){
    echo "tabble is created";
}