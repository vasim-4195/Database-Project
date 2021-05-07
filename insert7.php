 <?php
if(isset($_POST['submit'])){
$Model_No =$_POST['Model_No'];
$Emp_id =$_POST['Emp_id'];

$dbconnect=mysqli_connect('localhost','root','','project');   
$sql=mysqli_query($dbconnect,"insert into Bus(Bus_id,Model_No,Emp_id) values ('','$Model_No','$Emp_id')");
if($sql){
    echo "Data inserted Successfully";
}
else
{
echo "failed to insert";
}   
}
?>