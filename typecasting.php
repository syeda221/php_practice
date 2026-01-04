<?php
$arrayy = array("myname" =>"qunoot", "age" => 17 , "city" => "hyderabad");
$myarray = (object)$arrayy;
foreach ($myarray as $arr => $value){
    echo $arr . " : ". $value . "<br>";
}

?>