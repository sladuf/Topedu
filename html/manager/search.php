<?php
    
    include '../session.php';

    
    if($_GET["st_level"]){
        $st_level = $_GET["st_level"];
        $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');

        $search = "SELECT * FROM student WHERE level = '$st_level' and branch = '$branch'";
        $res = $mysqli->query($search);
        $return = array();

        while($row = $res->fetch_array(MYSQLI_ASSOC)){
            array_push($return, $row);
        }

        echo(json_encode($return));
    }
    elseif($_GET["st_id"]){
        $st_id = $_GET["st_id"];
        $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');

        $search = "SELECT * FROM student WHERE id = '$st_id' and branch = '$branch'";
        $res = $mysqli->query($search);
        $return = array();
    
        while($row = $res->fetch_array(MYSQLI_ASSOC)){
            array_push($return, $row);
        }
    
        echo(json_encode($return));
    }
    elseif($_GET['st_name']){
        $name = $_GET['st_name'];

        $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');
     
        $sql = "SELECT * FROM student WHERE name = '$name'";
        $res = $mysqli->query($sql);
    
        $return = array();
    
        while($row = $res->fetch_array(MYSQLI_ASSOC)){
            array_push($return, $row);
        }
    
        echo(json_encode($return));
    }

    mysqli_close($mysqli);
?>