<?php

    session_start();
   $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');
    
    $Id = $_POST["id"];
    $Pw = $_POST["passwd"];
 
    $sql = "SELECT * FROM student WHERE id = '$Id' AND pw='$Pw'";
    $res = $mysqli->query($sql);
 
    $row = $res->fetch_array(MYSQLI_ASSOC);
 
   if ($row != null) {
       $_SESSION['id'] = $Id;   
       echo "<script>location.href='main_page.html';</script>";
        }
 
   elseif($row == null){
     
   print "<script language = javascript> alert(\"로그인 실패\");
           location.replace('../index.html');</script>" ;                                               
     //header('location:'.$prevpage);
       }
    mysqli_close($mysqli);   
?>
