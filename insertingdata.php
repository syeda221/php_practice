<?php
$localhost ="localhost:3306";
$username = "root";
$password = "";
$db = "mydb";
$connection = mysqli_connect($localhost,$username,$password ,$db);

if(!$connection){
    die("connection failed" );
}

$sql = "INSERT INTO `student` VALUES($fname ,$lname ,$age ,$gender,$email,$message );";
$sqlcon = mysqli_query($connection , $sql);

if($sqlcon){
    echo "connected";
}
else{
    echo "not inserted",mysqli_error($connection);
}