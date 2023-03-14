<?php
session_start();
$val=$_SESSION["student"];
echo "Hello ". $val["name"]."<br>";
echo "Your age is :". $val['age']. "<br>";
echo "Your gender is: ".$val['gender'];
?>