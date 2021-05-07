 <?php
if(isset($_POST['submit'])){
$First_Name =$_POST['First_Name'];
$Last_Name =$_POST['Last_Name'];
$CNIC =$_POST['CNIC'];
$Designation =$_POST['Designation'];
$Phone =$_POST['Phone'];
$Address =$_POST['Address']; 
$dbconnect=mysqli_connect('localhost','root','','project');   
$sql=mysqli_query($dbconnect,"insert into Employee(Emp_id,First_Name,Last_Name,CNIC,Designation_id,Phone,Address_id) values ('','$First_Name','$Last_Name','$CNIC','$Designation','$Phone','$Address')");
if($sql){
    echo "Data inserted Successfully";
}
else
{
echo "failed to insert";
}   
}
?>