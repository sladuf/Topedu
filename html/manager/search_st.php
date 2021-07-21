<?php
    $name = $_GET['st_name'];

    $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');
 
    $sql = "SELECT * FROM student WHERE name = '$name'";
    $res = $mysqli->query($sql);

    $return = array();

    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        array_push($return, $row);
    }

    echo(json_encode($return));

    mysqli_close($mysqli);
?>