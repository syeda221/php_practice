<?php  
$name = $password = $email = $message = $gender = "";
function input_test($input){
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input , ENT_QUOTE);
    return $input
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = input_test($_POST["name"]);
    $password = input_test($_POST["password"]);
    $email = input_test($_POST["email"]);
    $message = input_test($_POST["message"]);
}

?>