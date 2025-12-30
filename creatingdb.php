<?php

$localhost ="localhost:3306";
$username = "root";
$password = "";
$connection = mysqli_connect($localhost,$username,$password);

if(!$connection){
    die("connection failed");
}
$sql = "CREATE DATABASE mydb";
$sqlcon = mysqli_query($connection,$sql);
if($sqlcon){
    echo "database is created";
}else{
    echo "database creation failed";
}
