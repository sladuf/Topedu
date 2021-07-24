<?php
    
    include '../session.php';
    if(!($_SESSION['name'])){
        echo "<script> alert(\"session error : 로그인이 필요합니다.\");
                   location.replace('index.html');</script>";
    }

    $st_level = $_POST["st_level"];
    $st_name = $_POST["st_name"];
    $st_id = $_POST["st_id"];
    $st_pw = $_POST["st_pw"];

    $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');

    $modify = "UPDATE student SET pw='$st_pw' ,name = '$st_name', level = '$_st_level' WHERE id = '$st_id'";
    $res = $mysqli->query($modify);
    echo "<script> alert(\"{$st_name}\")</script>";
    if($res){
        echo "<script> alert(\"정보가 변경되었습니다.\");
            location.replace('manage_student.html');</script>";
    }
    else{
        echo "<script> alert(\"error\");
            location.replace('manage_student.html');</script>";
    }
    
?>