<?php

        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE `project`.`Employee` SET `First_Name` = '$_POST[First_Name]', `Last_Name` = '$_POST[Last_Name]', `CNIC` = '$_POST[CNIC]', `Designation_id` = '$_POST[Designation_id]', `Phone` = '$_POST[Phone]', `Address_id` = '$_POST[Address_id]' WHERE (`Emp_id` = '$_POST[id]');
");



if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>