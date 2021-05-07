<?php
if(isset($_POST['submit'])){
$House_No= $_POST['House_No'];
$Street =$_POST['Street'];
$City =$_POST['City'];

$dbconnect=mysqli_connect('localhost','root','','project');
    
$sql=mysqli_query($dbconnect,"insert into Address(Address_id,House_No,Street,City) values ('','$House_No','$Street','$City')");
if($sql){
      header("refresh:0; url=insertion.php");
}
else
{
echo "failed to insert";
}   
}
?>
