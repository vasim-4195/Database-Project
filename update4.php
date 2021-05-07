<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE `project`.`Route` SET `route_destination` = '$_POST[route_destination]', `route_start` = '$_POST[route_start]' WHERE (`Route_id` = '$_POST[id]');");




if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>