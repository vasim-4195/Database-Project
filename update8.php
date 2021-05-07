<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE `project`.`Bus_Schedule` SET `Bus_id` = '$_POST[Bus]', `Route_id` = '$_POST[Route]', `Start_time` = '$_POST[Start_time]', `End_time` = '$_POST[End_time]' WHERE (`sch_id` = '$_POST[id]');
");



if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>