<?php
session_start();
if(!empty($_GET['delete'])){
    $d=replace("'","",$_GET['delete']);
    echo $d ;
    unset($_SESSION['student'][$_GET['delete']]);
}else{
    echo "không lấy được id";
}

?>