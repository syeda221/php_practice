<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from </title>
    <style>
        *{
            margin:0;
            padding:0;
            /* background-color:black;
            color:white; */
        }
        form{
            max-width:320px;
            margin:0 auto;
            display:flex;
            flex-direction:column;

        }
        form input{
            width:100%;
            height:30px;
            border-radius:10px;
            /* border:none; */
            /* background-color:white;
            color:black; */
        }
        #radio{
            height:20px;
           
        }
        #btn{
            color:black;
        }
        span{
            color:red;
        }
    </style>
</head>
<body>
    <?php

    //error and field variable declaration

    $name = $password = $email = $message = $gender = "";
    $nameerr = $passworderr = $emailerr = $messageerr = $gendererr = "";

    //sanitizing input function

    function input_test($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input , ENT_QUOTES);
    return $input;
}
//simple form output respond

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $name = input_test($_POST["name"]);
//     $password = input_test($_POST["password"]);
//     $email = input_test($_POST["email"]);
//     $message = input_test($_POST["message"]);
//     $gender = input_test($_POST["gender"]);

// }


//checking form filled field 

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     if(empty($_POST["name"])){
//         $nameerr = "fill this field";
//     }else{
//         $name = input_test($_POST["name"]);
//     }
//     if(empty($_POST["email"])){
//         $emailerr = "fill this field";
//     }else{
//         $email = input_test($_POST["email"]);
//     }
//     if(empty($_POST["password"])){
//         $passworderr = "fill this field";
//     }else{
//         $password = input_test($_POST["password"]);
//     }
//     if(empty($_POST["message"])){
//         $messageerr = "fill this field";
//     }else{
//         $message = input_test($_POST["message"]);
//     }
//     if(empty($_POST["gender"])){
//         $gendererr = "fill this field";
//     }else{
//         $gender = input_test($_POST["gender"]);
//     }
// }


//checking filled field and characters

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameerr = "fill this field";
    }
    else{
        $name = $_POST["name"];
        if(!preg_match("/^[a-zA-Z ']*$/" , $name)){
            $nameerr = "unvalid name";
        }
    }
}
?>

<!-- client side form display  -->

    <form action=<?= $_SERVER["PHP_SELF"];?> method="post">
        Name:<input type="text" name="name" id=""><span class="error"><?= "*". $nameerr?></span>
        Gmail:<input type="email" name="email" id=""><span class="error"><?= "*". $emailerr?></span>
        Password:<input type="password" name="password" id=""><span class="error"><?= "*". $passworderr?></span>
        female:<input type="radio" value="female" name="gender" id="radio"><span class="error"><?= "*". $gendererr?></span>
       male: <input type="radio" name="gender" value="male" id="radio"><span class="error"></span>
        Message:<textarea name="message" id=""></textarea><span class="error"><?= "*". $messageerr?></span>
        <input type="submit" value="submit" id="btn">
    </form>
    <?= $name . "<br>". $email ."<br>". $password . "<br>".$gender."<br>" . $message ?>

</body>
</html>
