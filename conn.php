<?php

$_SERVER = "localhost";
$_username = "root";
$_password = "";
$_db = "sms";

$conn = mysqli_connect($_SERVER,$_username,$_password,$_db);

if(!$conn){
    echo "failed";
}
// echo "connection";
?>