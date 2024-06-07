<?php

// What is file_get_contents()
// JSON Request-> Response


if($_SERVER['REQUEST_METHOD']=="POST"){
  $PlainTestJSON = file_get_contents("php://input");
  $PlainTestArray=json_decode($PlainTestJSON,true);
  $PlainArray['num1'];
  $sum=$PlainTestArray['num1']+$PlainTestArray['num2'];
  $sub=$PlainTestArray['num1']-$PlainTestArray['num2'];
  $multi=$PlainTestArray['num1']*$PlainTestArray['num2'];
  $div=$PlainTestArray['num1']/$PlainTestArray['num2'];
  

  $result=array("sum"=>$sum,"sub"=>$sub,"multi"=>$multi,"div"=>$div);
  echo json_encode($result);

    
}