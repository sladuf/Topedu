<?php
session_start();

$name = $_SESSION['name'];
$id = $_SESSION['id'];
$branch = $_SESSION['branch'];
if($_SESSION['level']){
    $level = $_SESSION['level'];
}
?>