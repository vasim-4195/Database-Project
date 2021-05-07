

<?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"delete from Customer
 where Customer_id='$_GET[id]'");


if($query)
    header("refresh:0; url=deletion.php");
else
    echo "It may be a foreign key in another table"
     ?>