<?php
    
    include '../session.php';

    if(!($_SESSION['name'])){
        echo "<script> alert(\"session error : 로그인이 필요합니다.\");
                   location.replace('index.html');</script>";
    }

    $st_id = $_GET["st_id"];
    $st_level = $_GET["st_level"];

    $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');

    foreach($st_id as $i){
        $sql = "UPDATE student SET level='$st_level' WHERE id = '$i'";
        $res = $mysqli->query($sql);
    }

    mysqli_close($mysqli);
    
?>