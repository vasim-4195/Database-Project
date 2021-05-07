 <?php
if(isset($_POST['submit'])){
$Bus_id =$_POST['Bus_id'];
$Route_id =$_POST['Route_id'];
$Start =$_POST['Start_time'];
$End =$_POST['End_time'];

$dbconnect=mysqli_connect('localhost','root','','project');   
$sql=mysqli_query($dbconnect,"insert into    Bus_Schedule(sch_id,Bus_id,Route_id,Start_time,End_Time) values ('','$Bus_id','$Route_id','$Start','$End')");
if($sql){
    echo "Data inserted Successfully";
}
else
{
echo "failed to insert";
}   
}
?>