<?php

$user = $_POST ["user"]; 
$password = $_POST ["password"];

$saveUser = "Pedro";
$savePassword = 12345;

if($user == $saveUser){
    header("location: https://www.potrerodigital.org");
}else{
    header("location: error.html");
}

?>