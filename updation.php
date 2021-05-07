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
        <th>House_No</th> 
       <th>Street</th> 
       <th>City</th> 
         <th>Submit</th>
        </tr>
        <?php 
        while($row=mysqli_fetch_assoc($query)){
            
            ?>
        <tr>
<form action=update.php method=post>
<td><?php echo "<input type=number name=house_No value='".$row['House_No']."'>";?></td>
<td><?php echo "<input type=text name=street value='".$row['Street']."'>" ;?></td>
<td><?php echo "<input type=text name=city value='".$row['City']."'>"; ?></td>     <?php echo "<input type=hidden name=id value='".$row['Address_id']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
</form>
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
        <th>Stop_Name</th>
                  <th>Submit</th>

        </tr>
       <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
            <?php echo "<form action=update2.php method=post>"; ?>
<td><?php echo "<input type=text name=stop_name value='".$rows['Stop_name']."'>" ;?></td>
   <?php echo "<input type=hidden name=id value='".$rows['Stop_id']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
<?php "</form>";?>
       
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
       <th>Balance</th> 
        <th>Cost</th> 
         <th>Submit</th>
        </tr>
                  <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
        <form action=update3.php method=post>
<td><?php echo "<input type=text name=balance value='".$rows['Balance']."'>" ;?></td>
<td><?php echo "<input type=text name=cost value='".$rows['Cost']."'>" ;?></td>            
   <?php echo "<input type=hidden name=id value='".$rows['Card_no']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
</form>    
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
         <th>route_start</th> 
       <th>route_destination</th> 
         <th>Submit</th>
        
        </tr>
                         <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
             <form action=update4.php method=post>
<td><?php echo "<input type=text name=route_start value='".$rows['route_start']."'>" ;?></td> 
<td><?php echo "<input type=text name=route_destination  value='".$rows['route_destination']."'>" ;?></td>
           
   <?php echo "<input type=hidden name=id value='".$rows['Route_id']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
</form>    
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
       <th>Designation_name</th> 
        <th>Submit</th>

        </tr>
                                 <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
            <form action=update5.php method=post>
<td><?php echo "<input type=text name=Designation_Name    value='".$rows['Designation_Name']."'>" ;?></td> 
   <?php echo "<input type=hidden name=id value='".$rows['Designation_id']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
</form>    

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
         <th>First_Name</th>
       <th>Last_Name</th> 
       <th>CNIC</th> 
       <th>Designation_id</th> 
       <th>Phone</th> 
       <th>Address_id</th>
         <th>Submit</th>
        </tr>
                                               <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
             <form action=update6.php method=post>
<td><?php echo "<input type=text name=First_Name value='".$rows['First_Name']."'>";?></td> 
<td><?php echo "<input type=text name=Last_Name value='".$rows['Last_Name']."'>";?></td> 
<td><?php echo "<input type=text name=CNIC value='".$rows['CNIC']."'>";?></td>
   <?php
       
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Designation_id">
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option name=Designation_id value="<?php echo $row['Designation_id'] ?>"><?php echo $row['Designation_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>                                
<td><?php echo "<input type=text name=Phone value='".$rows['Phone']."'>";?></td> 
                             <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Address_id from project.Address");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Address_id">
            <option value="">Select any one</option> 
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option value="<?php echo $row['Address_id'] ?>"><?php echo $row['Address_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>             
   <?php echo "<input type=hidden name=id value='".$rows['Emp_id']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
</form>    
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
       <th>Model_no</th> 
       <th>Emp_id</th>
         <th>Submit</th>
        </tr>
         <?php 
        while($row=mysqli_fetch_array($query)){
            ?>
        <tr>
            <form action=update7.php method=post>
<td><?php echo "<input type=text name=Model_No value='".$row['Model_No']."'>" ;?></td> 
  <?php 
            $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Emp_id from project.Bus");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Emp_id">
            <option value="">Select any one</option> 
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option name=Emp_id value="<?php echo $row['Emp_id'] ?>"><?php echo $row['Emp_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>              
   <?php echo "<input type=hidden name=id value='".$rows['Bus_id']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
</form>    
        
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
       <th>Bus_id</th> 
       <th>Route_id</th> 
       <th>Start_time</th> 
       <th>End_Time</th> 
         <th>Submit</th>
        </tr>
                  <?php 
        while($rows=mysqli_fetch_assoc($query)){
            ?>
        <tr>
                       <form action=update8.php method=post> 
  <?php 
$dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Bus_id from project.Bus_Schedule");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Bus">
            <option value="">Select any one</option> 
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option name=Bus_id value="<?php echo $row['Bus_id'] ?>"><?php echo $row['Bus_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>
        
       <td><select name="Route">
            <option value="">Select any one</option> 
            <?php 
            $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Route_id from project.Bus_Schedule
");
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option name=Route_id value="<?php echo $row['Route_id'] ?>"><?php echo $row['Route_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>
<td><?php echo "<input type=time name=Start_time value='".$rows['Start_time']."'>" ;?></td>
<td><?php echo "<input type=time name=End_time value='".$rows['End_time']."'>" ;?></td>
   <?php echo "<input type=hidden name=id value='".$rows['sch_id']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
</form>  
       
        </tr>
        <?php
        }
        ?>         
         </table>
    </div>
<div id="t9" >
         <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
     $query=mysqli_query($dbconnect,"select * from project.Customer");
     ?>
    <table align="center" border="10" cellpadding="5">
     <tr>
         <h1 align="center">Customer</h1>
       <th>Customer_name</th> 
       <th>Card_no</th> 
         <th>Submit</th>
        </tr>
                         <?php 
        while($rows=mysqli_fetch_array($query)){
            ?>
        <tr>
          <form action=update9.php method=post>
<td><?php echo "<input type=text name=Customer_name value='".$rows['Customer_name']."'>";?></td>
   <?php
       
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Card_no">
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option name=Card_no value="<?php echo $row['Card_no'] ?>"><?php echo $row['Card_no'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>                                

   <?php echo "<input type=hidden name=id value='".$rows['Customer_id']."'>" ;?>  
<td> <input type="submit" name="submit" value="submit"></td>
</form>  
        </tr>
        <?php
        }
        ?>         
    
         </table>
    </div>
    
    </body>
</html>
