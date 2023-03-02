<?php
$val=[
    "name"=>"thi",
    "email"=>"thi.a24@student.passerellesnumeriques.org",
    "password"=>"thibackend2003"
];
$val1 = serialize($val);
setcookie("student",$val1);
$getvalue=unserialize($_COOKIE['student']);
echo "<pre>";
print_r($getvalue);
echo "</pre>";


?>