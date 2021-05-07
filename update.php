<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE Address SET House_No = '$_POST[house_No]', Street = '$_POST[street]', City = '$_POST[city]' WHERE (Address_id = '$_POST[id]')");



if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>