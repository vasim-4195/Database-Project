<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE `project`.`Bus` SET `Model_No` = '$_POST[Model_No]', `Emp_id` = '$_POST[Emp_id]' WHERE (`Bus_id` = '$_POST[id]');
");



if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>