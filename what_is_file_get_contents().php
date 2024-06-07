<?php

// What is file_get_contents()
// JSON Request-> Response


if($_SERVER['REQUEST_METHOD']=="POST"){
  $PlainTestJSON = file_get_contents("php://input");
    echo $PlainTestJSON;
}