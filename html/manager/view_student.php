<?php
    
    include '../session.php';


    $lv = $_GET['level'];

    include '../db_connect.php';

    $search = "SELECT * FROM student WHERE level = '$lv' and branch = '$branch'";
    $res = $mysqli->query($search);
    $return = array();

    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        array_push($return, $row);
    }

    echo(json_encode($return));

    mysqli_close($mysqli);
?>