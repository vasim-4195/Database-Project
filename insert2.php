 <?php
if(isset($_POST['submit'])){

$Stop_Name =$_POST['Stop_Name'];

$dbconnect=mysqli_connect('localhost','root','','project');
    
$sql=mysqli_query($dbconnect,"insert into Bus_Stop(Stop_id,Stop_Name) values ('','$Stop_Name')");
if($sql){
    echo "Data inserted Successfully";
}
else
{
echo "failed to insert";
}   
}
?>