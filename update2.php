<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE Bus_Stop SET Stop_name = '$_POST[stop_name]' WHERE (Stop_id = '$_POST[id]')");
;



if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>