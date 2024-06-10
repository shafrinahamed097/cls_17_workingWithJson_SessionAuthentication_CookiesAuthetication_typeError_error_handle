<?php

// What is file_get_contents()
// JSON Request-> Response
// JSON Decode


if($_SERVER['REQUEST_METHOD']=="POST"){
  $PlainTextJSON = file_get_contents("php://input");
  $PlainTextArray=json_decode($PlainTextJSON,true);
 
  $sum=$PlainTextArray['num1']+$PlainTextArray['num2'];
  $sub=$PlainTextArray['num1']-$PlainTextArray['num2'];
  $multi=$PlainTextArray['num1']*$PlainTextArray['num2'];
  $div=$PlainTextArray['num1']/$PlainTextArray['num2'];
  

  $result=array("sum"=>$sum,"sub"=>$sub,"multi"=>$multi,"div"=>$div);
  echo json_encode($result);

    
}