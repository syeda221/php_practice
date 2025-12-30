<?php
$localhost ="localhost:3306";
$username = "root";
$password = "";
$db = "mydb";
$connection = mysqli_connect($localhost,$username,$password ,$db);

if(!$connection){
    die("connection failed" );
}
//single data input
// $sql="INSERT INTO `user`( `name`) VALUES ('ali')";
//multiple data input
$sql = "INSERT INTO `user` (`id`, `name`) VALUES(4 , 'moosa'),(5, 'yasir');";
$sqlcon = mysqli_query($connection , $sql);

if($sqlcon){
    echo "connected";
}
else{
    echo "not inserted",mysqli_error($connection);
}