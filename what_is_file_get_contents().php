<?php

// What is file_get_contents()
// JSON Request-> Response


if($_SERVER['REQUEST_METHOD']=="POST"){
  $PlainTestJSON = file_get_contents("php://input");
  $PlainTestArray=json_decode($PlainTestJSON,true);
  $PlainArray['num1'];
  echo $PlainTestArray['num1']+$PlainTestArray['num2'];
    
}