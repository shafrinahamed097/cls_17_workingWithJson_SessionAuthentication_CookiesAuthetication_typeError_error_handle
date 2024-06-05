<?php
// Associative Array to JSON Array

$person=[["name"=>"Shafrin", "age"=>27, "city"=>"Dhaka"],
   ["name"=>"Shamim", "age"=>22, "city"=>"Chittagong"],
["name"=>"Sakib", "age"=>23, "city"=>"Dhaka"],
["name"=>"Sabbir", "age"=>24, "city"=>"Chittagong"]

];
$JSON = json_encode($person);
echo $JSON;
// output: [{"name":"Shafrin","age":27,"city":"Dhaka"},{"name":"Shamim","age":22,"city":"Chittagong"},{"name":"Sakib","age":23,"city":"Dhaka"},{"name":"Sabbir","age":24,"city":"Chittagong"}]
