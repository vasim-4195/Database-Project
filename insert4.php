 <?php
if(isset($_POST['submit'])){

$route_destination =$_POST['route_destination'];
$route_start =$_POST['route_start'];
$dbconnect=mysqli_connect('localhost','root','','project');
    
$sql=mysqli_query($dbconnect,"insert into Route(Route_id,route_start,route_destination) values ('','$route_start','$route_destination')");
if($sql){
    echo "Data inserted Successfully";
}
else
{
echo "failed to insert";
}   
}
?>
