 <?php
if(isset($_POST['submit'])){

$Designation_Name =$_POST['Designation_Name'];

$dbconnect=mysqli_connect('localhost','root','','project');
    
$sql=mysqli_query($dbconnect,"insert into Designation(Designation_id,Designation_Name) values ('','$Designation_Name')");
if($sql){
    echo "Data inserted Successfully";
}
else
{
echo "failed to insert";
}   
}
?>