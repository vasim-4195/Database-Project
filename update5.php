<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE `project`.`Designation` SET `Designation_Name` = '$_POST[Designation_Name]' WHERE (`Designation_id` = '$_POST[id]');
");



if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>