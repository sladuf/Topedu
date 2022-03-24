<?php
    
    include '../session.php';
    

    if(!($_SESSION['name'])){
        echo "<script> alert(\"session error : 로그인이 필요합니다.\");
                   location.replace('index.html');</script>";
    }

    
    include '../db_connect.php';
    $st_id = $_GET["st_id"];

    foreach($st_id as $i){
        $sql = "DELETE FROM student WHERE id = '$i'";
        $res = $mysqli->query($sql);
    }

    mysqli_close($mysqli);
    
?>