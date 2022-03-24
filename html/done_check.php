<?php
    
    include 'session.php';

    if(!($_SESSION['name'])){
        echo "<script> alert(\"session error : 로그인이 필요합니다.\");
                   location.replace('index.html');</script>";
    }

    include 'db_connect.php';
    $homework = "UPDATE student SET homework=homework+1 WHERE id = '$id'";
    $res = $mysqli->query($homework);

    $count = "SELECT homework FROM student WHERE id = '$id'";
    $result = $mysqli->query($count);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo($row['homework']);
    
?>