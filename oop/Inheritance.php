<?php
abstract class classone {
    abstract function show($str);
}
class classtwo extends classone {
    function show($word){
      echo $word;
    }
}
$obj1  = new classtwo();
$obj1->show("hellow");

?>