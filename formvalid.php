<?php
$fname = $lname = $gender = $age = $email =$message = "";
$ferror = $lerror = $gerror = $aerror = $eerror = $merror = "";
function sanitize($input){
    $input =trim($input);
    $input = stripslashes($input);
   $input= htmlspecialchars($input ,ENT_QUOTES);
    return $input;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST['fname'] )){
        $ferror = "first name is required";
    }else{
        $fname  = sanitize($_POST['fname']);
    }
    if (empty($_POST['lname'] )){
        $lerror = "last name is required";
    }else{
        $lname  = sanitize($_POST['lname']);
    }
    if( empty($_POST['gender'] )){
        $gerror = "gender is required";
    }else{
        $gender  = sanitize($_POST['gender']);
    }
    if(empty($_POST['age'] )){
        $aerror = "age is required";}
        else{
            $age = sanitize($_POST['age']);
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $eerror = "invalid email format";
        }else{
            $email = sanitize($_POST['email']);
        }
        if(empty($_POST['message'] )){
            $merror = "message is required";}
            else{
                $message = sanitize($_POST['message']);
            }
            if(!$ferror && !$lerror && !$gerror && !$aerror && !$eerror && !$merror ){
            include "insertingdata.php";

            }
}

    echo $ferror . "<br> " .$lerror .  "<br> " .$eerror . "<br> " .$aerror . "<br> " .$merror ."<br>" . $gerror; ?>


