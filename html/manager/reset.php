<?php
    
    include '../session.php';


    $lv = $_GET['level'];

    $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');

    $search = "UPDATE student SET homework=0 WHERE level='$lv' and branch='$branch'";
    $res = $mysqli->query($search);

    echo "done";
    mysqli_close($mysqli);
?>