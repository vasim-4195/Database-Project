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
      <img src="img.png" alt="logo" class="logo">
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
    <div id="t1">
    <form  action="insert.php" method="post">
        <table align="center">
                    <h1 align="center">Address</h1>
           <tr>
          <tr>
            <td>House_No:</td>
                <td><input type="number" name="House_No">
            </tr>
                       <tr>
            <td>Street:</td>
                <td><input type="text" name="Street">
            </tr>
                       <tr>
            <td>City:</td>
                <td><input type="text" name="City">
            </tr>
            <tr >
                <td ><button type="submit" name="submit" value="Add">Submit </button> </td>   
            </tr>
        </table> 
        </form>
    </div>
    <div id="t2">
     <h1 align="center">Bus_Stop</h1>
    <form  action="insert2.php" method="post">
        <table align="center">
           <tr>
           <tr>
               <td>Stop_Name:</td>
               <td><input type="text" name="Stop_Name"></td>
            <tr>
                <td> <input type="submit" name="submit" value="Add">  </td>   
            </tr>
        </table> 
        </form>
    </div>
    <div id="t3">
    <h1 align="center">Card</h1>
    <form  action="insert3.php" method="post">
        <table align="center">
           <tr>
               <tr>
               <td>Balance:</td>
               <td><input type="number" name="Balance"></td>
                   <tr>
               <td>Cost:</td>
               <td><input type="number" name="Cost"></td>
            <tr>
                <td> <input type="submit" name="submit" value="Add">  </td>   
            </tr>
        </table> 
        </form>
    </div>
    <div id="t4">
    <h1 align="center">Route</h1>
    <form action="insert4.php" method="post">
        <table align="center">
           <tr>
               <tr>
               <td>route_destination:</td>
               <td><input type="text" name="route_destination"></td>
                   <tr>
               <td>route_start:</td>
               <td><input type="text" name="route_start"></td>
            <tr>
                <td> <input type="submit" name="submit" value="Add">  </td>   
            </tr>
        </table> 
        </form>
    </div>
    <div id="t5">
       <h1 align="center">Designation</h1>
    <form action="insert5.php" method="post">
        <table align="center">
           <tr>
               <tr>
               <td>Designation_Name:</td>
               <td><input type="text" name="Designation_Name"></td>
            <tr>
                <td> <input type="submit" name="submit" value="Add">  </td>   
            </tr>
        </table> 
        </form> 
    </div>
    <div id="t6">
       <h1 align="center">Employee</h1>
    <form action="insert6.php" method="post">
        <table align="center">
           <tr>
               <tr>
               <td>First_Name:</td>
               <td><input type="text" name="First_Name"></td>
                   <tr>
                   <td>Last_Name:</td>
               <td><input type="text" name="Last_Name"></td>
                       <tr>
                   <td>CNIC:</td>
               <td><input type="number" name="CNIC"></td>
                               <tr>
                   <td>Phone:</td>
               <td><input type="number" name="Phone"></td>
                                   <tr>
        <tr>
        <td>Address_id:</td>
            <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Address_id from project.Address");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Address">
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
        </tr>
                    <tr>
        <td>Designation_id:</td>
            <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Designation_id from project.Designation");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Designation">
            <option value="">Select any one</option> 
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option value="<?php echo $row['Designation_id'] ?>"><?php echo $row['Designation_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>
        </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Add">  </td>   
            </tr>
        </table> 
        </form> 
    </div> 
    <div id="t7">
    <h1 align="center">Bus</h1>
       <form action="insert7.php" method="post">
        <table align="center">
           <tr>
               <tr>
               <td>Model_No:</td>
               <td><input type="text" name="Model_No"></td>

                                   <tr>
        <tr>
        <td>Emp_id:</td>
            <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Emp_id from project.Employee");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Emp_id">
            <option value="">Select any one</option> 
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option value="<?php echo $row['Emp_id'] ?>"><?php echo $row['Emp_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>
        </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Add">  </td>   
            </tr>
        </table> 
        </form> 
    
    </div>
    <div id="t8">
     <h1 align="center">Bus_Schedule</h1>
         <form align="center" action="insert8.php" method="post">
        <table align="center">
           <tr>
               <tr>
               <td>Start_time:</td>
               <td><input type="time" name="Start_time"></td>
<tr>
               <td>End_time:</td>
               <td><input type="time" name="End_time"></td>
                                   <tr>
        <tr>
        <td>Bus_id:</td>
            <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Bus_id from project.Bus");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Bus_id">
            <option value="">Select any one</option> 
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option value="<?php echo $row['Bus_id'] ?>"><?php echo $row['Bus_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>
        </tr>
             <tr>
        <td>Route_id:</td>
            <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Route_id from project.Route");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Route_id">
            <option value="">Select any one</option> 
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option value="<?php echo $row['Route_id'] ?>"><?php echo $row['Route_id'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>
        </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Add">  </td>   
            </tr>
        </table> 
        </form> 
    
        
        
    </div>
    <div id="t9">
    <h1 align="center">Customer</h1>
         <form align="center" action="insert9.php" method="post">
        <table align="center">
           <tr>
               <tr>
               <td>Customer_name:</td>
               <td><input type="text" name="Customer_name"></td>
                                   <tr>
             <tr>
        <td>Card_no:</td>
            <?php
        $dbconnect=mysqli_connect('localhost','root','','project');
$query=mysqli_query($dbconnect,"select Card_no from project.Card");
    $rowcount=mysqli_num_rows($query);
            ?> 
       <td><select name="Card_no">
            <option value="">Select any one</option> 
            <?php 
             for($i=1;$i<=$rowcount;$i++){
                       $row=mysqli_fetch_array($query); 
            ?>      
  <option value="<?php echo $row['Card_no'] ?>"><?php echo $row['Card_no'] ?></option>
                          <?php             
                         }
            ?>
           </select></td>
        </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Add">  </td>   
            </tr>
        </table> 
        </form> 
    </div>

    </body>
    
</html>
