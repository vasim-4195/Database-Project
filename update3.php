<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"UPDATE Card SET Balance = '$_POST[balance]', Cost = '$_POST[cost]' WHERE (Card_no = '$_POST[id]')");





if($query)
    header("refresh:0; url=updation.php");
else
    echo "not updates"
    
     ?>