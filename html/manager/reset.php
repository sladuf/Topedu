<?php
    
    include '../session.php';


    $lv = $_GET['level'];

    include '../db_connect.php';

    $search = "UPDATE student SET homework=0 WHERE level='$lv' and branch='$branch'";
    $res = $mysqli->query($search);

    echo "done";
    mysqli_close($mysqli);
?>