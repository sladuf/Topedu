<?php
    
    include '../session.php';

    if(!($_SESSION['name'])){
        echo "<script> alert(\"session error : 로그인이 필요합니다.\");
                   location.replace('index.html');</script>";
    }

    $st_id = $_GET["st_id"];

    $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');

    $sql = "DELETE FROM student WHERE id = '$st_id'";
    $res = $mysqli->query($sql);

    mysqli_close($mysqli);
    
?>