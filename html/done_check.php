<?php
    
    include 'session.php';
    if(!($_SESSION['name'])){
        echo "<script> alert(\"session error : 로그인이 필요합니다.\");
                   location.replace('index.html');</script>";
    }

    $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');

    $homework = "UPDATE student SET homework=homework+1 WHERE id = '$id'";
    $res = $mysqli->query($homework);
    
?>