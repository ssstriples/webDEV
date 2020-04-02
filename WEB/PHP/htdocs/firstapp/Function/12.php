<?php
//global variable $test
$test = 1;
function get_arguments($arg){
  //local variable $arg
  global $test; //global variable 사용하기 위해서 선언해줘야함
  return $arg+$test;
}

echo get_arguments(1);
echo $test;
 ?>
