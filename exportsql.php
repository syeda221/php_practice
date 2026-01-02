<?php
$localhost = "localhost:3306";
$name "root";
$password = "";
$db = "mydb";
$conn = mysqli_connect($localhost, $name ,$password ,$db);

if(!$conn){
    die("connection failed " . mysqli_connect_error());
}
$db_tabel = "students";
$backup = "Documents/backup.sql";
$sql = "SELECT * INTO AUTOFILE $backup FROM $db_tabel"; 
if(! mysqli_query($conn , $sql)){
    echo "error " . mysqli_error($conn);
}
else{
    echo "backup created successfully on $backup";
} 
?>