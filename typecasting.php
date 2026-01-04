<?php
$arrayy = array("myname" =>"qunoot", "age" => 17 , "city" => "hyderabad");
$myarray = (object)$arrayy;
foreach ($myarray as $arr => $value){
    var_dump($arr . " : ". $value . "<br>");
}
echo '<br><br><br>';
foreach ($arrayy as $arr => $value){
    var_dump($arr . " : ". $value . "<br>");
}

