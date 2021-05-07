 <?php
if(isset($_POST['submit'])){

$Balance =$_POST['Balance'];
$Cost =$_POST['Cost'];

$dbconnect=mysqli_connect('localhost','root','','project');
    
$sql=mysqli_query($dbconnect,"insert into Card(Card_No,Balance,Cost) values ('','$Balance','$Cost')");
if($sql){
    echo "Data inserted Successfully";
}
else
{
echo "failed to insert";
}   
}
?>