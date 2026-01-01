<?php
$host ="localhost:3306";
$name = "root";
$password = "";
$db = "mydb";
$conn = sqli_connect($host,$name ,$password,$db);
if(!$conn){
    die("connection failed".sqli_connect_error());
}

$sql = "SELECT `first name`, `last name` , `email` , `gender` FROM student";
$result = mysqli_query($conn,$sql);
if(!mysqli_query($result)){
    echo "error". mysqli_error($conn);
}x
while($row = mysqli_fetch_assoc($result)){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>name </th>
            <th>gender</th>
            <th>email</th>
        </tr>
        <?php echo "<tr> <td>". $row['first name'] . " " . $row['last name'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['email'] . "</td></tr>"; ?>
    </table>
<?php } ?>

   




</body>
</html>