<?php 
$name = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $name = $_POST["name"];
   if($name != ""){
    session_start();
    $_SESSION["name"] = $name;
    echo "yes";
   }
   elseif($name = ""){
    echo "welcome back user";
   }
   else{
    
   }
}
echo "<br> here is yours name : ". $_SESSION["name"]
?>
