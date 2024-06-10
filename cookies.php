<?php



// Set Cookies Store


if($_SERVER['REQUEST_METHOD']=="POST"){
    $PlainText = file_get_contents("php://input");
    $PlainArray = json_decode($PlainText,true);
    $username = $PlainArray['username'];

    setcookie("username",$username,["expires"=>time()+3600]);
    echo "Cookie Success";
}

// Delete Cookies Store
if($_SERVER['REQUEST_METHOD']=="DELETE"){
    setcookie("username","",["expires"=>time()-3600]);
    echo "Cookie Deleted";
}