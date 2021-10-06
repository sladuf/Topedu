<?php
session_start();

$name = $_SESSION['name'];
$id = $_SESSION['id'];
$branch = $_SESSION['branch'];
if($_SESSION['level']){
    $level = $_SESSION['level'];
}


if(!($_SESSION['name'])){
    echo "<script> alert(\"session error : 로그인이 필요합니다.\");
               location.replace('index.html');</script>";
}
?>