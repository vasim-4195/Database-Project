<html>
<head>
    <title> Database Systems </title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time();?>">
 <style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap');
</style>
    </head>
<body>
<header>
    <div class="container">
     <img src="img.png" alt="heading">
        <nav>
        <ul>
          <li><a href="index.php">Home</a></li>     
       <li><a href="updation.php">Updation</a></li>     
       <li><a href="insertion.php">Insertion</a></li>     
       <li><a href="deletion.php">Deletion</a></li>     
       <li><a href="about.php">About</a></li>     
            </ul>
        </nav>  
        </div>
    </header>
<div id="t1" >
     <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Address");
     ?>
    <table align="center" border="10" cellpadding="5"  >
     <tr>
         <h1 align="center">Address</h1>
       <th>Address_id</th> 
        <th>House_No</th> 
       <th>Street</th> 
       <th>City</th> 
         <th>Delete</th> 
        </tr>
        <?php 
        while($rows=mysqli_fetch_array($query)){  
            ?>
        <tr>
        <td><?php echo $rows['Address_id']; ?></td>
        <td><?php echo $rows['House_No']; ?></td>
        <td><?php echo $rows['Street']; ?></td>
        <td><?php echo $rows['City']; ?></td>
<?php echo "<td><a id=del href=delete.php?id=".$rows['Address_id'].">Delete</a></td>" ?>
        </tr>
        <?php
        }
        ?>  
     </table>
    </div>
<div id="t2" >
             <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Bus_Stop");
     ?>
    <table align="center" border="10" cellpadding="5">
     <tr>
         <h1 align="center">Bus_Stop</h1>
       <th>Stop_id</th> 
        <th>Stop_Name</th>
                  <th>Delete</th> 

        </tr>
       <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
        <td><?php echo $rows['Stop_id']; ?></td>
        <td><?php echo $rows['Stop_name']; ?></td>
<?php echo "<td><a id=del href=delete2.php?id=".$rows['Stop_id'].">Delete</a>"?>
        </tr>
        <?php
        }
        ?>
         </table>
    </div>
<div id="t3" >
              <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Card");
     ?>
    <table align="center" border="10" cellpadding="5">
     <tr>
         <h1 align="center">Card</h1>
         <th>Card_No</th>
       <th>Balance</th> 
        <th>Cost</th> 
         <th>Delete</th> 

        </tr>
                  <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
        <td><?php echo $rows['Card_no']; ?></td>
        <td><?php echo $rows['Balance']; ?></td>
        <td><?php echo $rows['Cost']; ?></td>
    <?php echo "<td><a id=del href=delete3.php?id=".$rows['Card_no'].">Delete</a>"?>
        </tr>
        <?php
        }
        ?>   
         </table>
    </div>
<div id="t4" >
                 <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Route");
     ?>
    <table align="center" border="10" cellpadding="5">
     <tr>
         <h1 align="center">Route</h1>
         <th>Route_id</th>
       <th>route_destination</th> 
        <th>route_start</th> 
                  <th>Delete</th> 

        </tr>
                         <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
        <td><?php echo $rows['Route_id']; ?></td>
        <td><?php echo $rows['route_destination']; ?></td>
        <td><?php echo $rows['route_start']; ?></td>
     <?php echo "<td><a id=del href=delete4.php?id=".$rows['Route_id'].">Delete</a>"?>
        </tr>
        <?php
        }
        ?>       
      </table>
    </div>
<div id="t5" >
         <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Designation");
     ?>
    <table align="center" border="10" cellpadding="5">
     <tr>
         <h1 align="center">Designation</h1>
         <th>Designation_id</th>
       <th>Designation_name</th> 
                           <th>Delete</th> 

        </tr>
                                 <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
        <td><?php echo $rows['Designation_id']; ?></td>
        <td><?php echo $rows['Designation_Name']; ?></td>
    <?php echo "<td><a id=del href=delete5.php?id=".$rows['Designation_id'].">Delete</a>"?>
        </tr>
        <?php
        }
        ?>  
               
         </table>
    </div>
<div id="t6" >
         <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Employee");
     ?>
    <table align="center" border="10" cellpadding="5">
     <tr>
         <h1 align="center" >Employee</h1>
                <th>Emp_id</th> 
         <th>First_Name</th>
       <th>Last_Name</th> 
       <th>CNIC</th> 
       <th>Designation_id</th> 
       <th>Phone</th> 
       <th>Address_id</th> 
     <th>Delete</th> 

        </tr>
                                               <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
        <td><?php echo $rows['Emp_id']; ?></td>
        <td><?php echo $rows['First_Name']; ?></td>
        <td><?php echo $rows['Last_Name']; ?></td>
        <td><?php echo $rows['CNIC']; ?></td>
        <td><?php echo $rows['Designation_id']; ?></td>
        <td><?php echo $rows['Phone']; ?></td>
        <td><?php echo $rows['Address_id']; ?></td>
<?php echo "<td><a id=del href=delete6.php?id=".$rows['Emp_id'].">Delete</a>"?>

        </tr>
        <?php
        }
        ?>
         </table>
    </div>
<div id="t7" >
          <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Bus");
     ?>
    <table align="center" border="10" cellpadding="5">
     <tr>
         <h1 align="center">Bus</h1>
         <th>Bus_id</th>
       <th>Model_no</th> 
       <th>Emp_id</th>
              <th>Delete</th> 

        </tr>
         <?php 
        while($rows=mysqli_fetch_array($query)){
            ?>
        <tr>
        <td><?php echo $rows['Bus_id']; ?></td>
        <td><?php echo $rows['Model_No']; ?></td>
        <td><?php echo $rows['Emp_id']; ?></td>
    <?php echo "<td><a id=del href=delete7.php?id=".$rows['Bus_id'].">Delete</a>"?>
        </tr>
        <?php
        }
        ?>
         </table>
    </div>
<div id="t8" >
          <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Bus_Schedule");
     ?>
    <table  align="center" border="10" cellpadding="5">
     <tr>
         <h1  align="center" >Bus_Schedule</h1>
         <th>sch_id</th>
       <th>Bus_id</th> 
       <th>Route_id</th> 
       <th>Start_time</th> 
       <th>End_Time</th> 
          <th>Delete</th> 

        </tr>
                  <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
        <td><?php echo $rows['sch_id']; ?></td>
        <td><?php echo $rows['Bus_id']; ?></td>
        <td><?php echo $rows['Route_id']; ?></td>
        <td><?php echo $rows['Start_time']; ?></td>
        <td><?php echo $rows['End_time']; ?></td>
        <?php echo "<td><a id=del href=delete8.php?id=".$rows['sch_id'].">Delete</a>"?>

        </tr>
        <?php
        }
        ?>         
         </table>
    </div>
<div id="t9" >
         <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from Customer");
     ?>
    <table align="center" border="10" cellpadding="5">
     <tr>
         <h1 align="center">Customer</h1>
         <th>Customer_id</th>
       <th>Customer_name</th> 
       <th>Card_no</th> 
         <th>Delete</th>
        </tr>
                         <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
        <td><?php echo $rows['Customer_id']; ?></td>
        <td><?php echo $rows['Customer_name']; ?></td>
        <td><?php echo $rows['Card_no']; ?></td>
     <?php echo "<td><a id=del href=delete9.php?id=".$rows['Customer_id'].">Delete</a>"?>

        </tr>
        <?php
        }
        ?>         
    
         </table>
    </div>
    
    </body>
</html>
