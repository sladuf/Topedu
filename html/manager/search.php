<?php
    
    include '../session.php';

    
        $st_level = $_GET["st_level"];
        $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');

        $search = "SELECT * FROM student WHERE level = '$st_level' and branch = '$branch'";
        $res = $mysqli->query($search);
        $return = array();

        while($row = $res->fetch_array(MYSQLI_ASSOC)){
            array_push($return, $row);
        }

        echo(json_encode($return));

    mysqli_close($mysqli);
?>