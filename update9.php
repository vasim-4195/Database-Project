<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE `project`.`Customer` SET `Customer_name` = '$_POST[Customer_name]', `Card_no` = '$_POST[Card_no]'  WHERE (`Customer_id` = '$_POST[id]')");



if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>