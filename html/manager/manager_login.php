<?php

    session_start();
   $mysqli = new mysqli('localhost', 'topedu', 'topedu2021!', 'english');
    
    $Id = $_POST["id"];
    $Pw = $_POST["passwd"];
 
    $sql = "SELECT * FROM teacher WHERE id = '$Id' AND pw='$Pw'";
    $res = $mysqli->query($sql);
 
    $row = $res->fetch_array(MYSQLI_ASSOC);
 
   if ($row != null) {
       $_SESSION['id'] = $Id;
       $_SESSION['name'] = $row['name'];
       $_SESSION['branch'] = $row['branch'];
       echo "<script>location.href='manager_page.html';</script>";
        }
 
   elseif($row == null){
     
   print "<script language = javascript> alert(\"아이디 또는 비밀번호가 틀렸습니다.\");
           location.replace('manager_login.html');</script>" ;                                               
     //header('location:'.$prevpage);
       }
    mysqli_close($mysqli);   
?>
