<?php

// Associative Array to JSON Object Encode

$person=["name"=>"Shafrin", "age"=>27, "city"=>"Dhaka"];

$JSON= json_encode($person);

echo $JSON; 
// {"name":"Shafrin","age":27,"city":"Dhaka"}

