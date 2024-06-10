<?php

// Set Session Store

if($_SERVER['REQUEST_METHOD']=="POST"){
    $PlainText=file_get_contents("php://input");
    $PlainArray=json_decode($PlainText,true);
    $username=$PlainArray['username'];
    session_start();
    $_SESSION['username']=$username;
    echo "Success";
}

// Read From Session Store

if($_SERVER['REQUEST_METHOD']=="GET"){
    session_start();
    echo $_SESSION['username'];
}