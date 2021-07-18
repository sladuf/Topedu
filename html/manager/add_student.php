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

    $id_check = "SELECT * FROM student WHERE id = '$st_id'";
    $res = $mysqli->query($id_check);
    $row= mysqli_num_rows($res);
    
    if($st_id and $st_pw and $st_name and $st_level){
        if($row){
            echo "<script> alert(\"아이디가 중복됩니다.\");
               location.replace('add_student.html');</script>";
        }
        else{
            $insert = "INSERT INTO student VALUES ('$st_id','$st_pw','$st_name','$branch','$st_level')";
            $mysqli->query($insert);
            echo "<script> alert(\"추가되었습니다.\");
               location.replace('st_manage.html');</script>";
        }
    }
    else{
        echo "<script> alert(\"정보를 모두 입력하세요.\");
               location.replace('add_student.html');</script>";
    }
    
?>