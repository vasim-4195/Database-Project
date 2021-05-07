 <?php
if(isset($_POST['submit'])){
$Customer_name =$_POST['Customer_name'];
$Card_no =$_POST['Card_no'];

$dbconnect=mysqli_connect('localhost','root','','project');   
$sql=mysqli_query($dbconnect,"insert into    Customer(Customer_id,Customer_name,Card_no) values ('','$Customer_name','$Card_no')");
if($sql){
    echo "Data inserted Successfully";
}
else
{
echo "failed to insert";
}   
}
?>