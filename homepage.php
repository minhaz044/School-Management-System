<?php
 include('session.php');
 include('DBcon.php');
			

 ?>



<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;

}
li a {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.3s;
    cursor: pointer;
	height:15px;
	width:180px;
	background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
height:22px;
}


li a:hover {
     background-color: #4CAF50;
    color: white;
}

</style>








   
  
      <title>Welcome </title>
   </head>
   
   <body >
<?php



	
switch ($login_role) {
    case "Student":

 $query="SELECT fname,mname,lname  from studentinfo where id='$login_session'";
 $execute=mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($execute);
$loginname= $row["fname"]." ".$row["mname"]." ".$row["lname"];

?>
        <h1 align="center"><?php echo $loginname; ?></h1>
	  <p align="center" style=" margin-left: 50px;margin-top: -30px;"> <?php echo $login_role ; ?></p>

		<div align="center">
		
		<ul >
		<li><a href="updateinfo.php"><span>Edit Info </span></a></li>
		<li ><a href="viewattendancestd.php"><span>View Attendance </span></a></li>
		<li><a href="viewresult.php"><span>Result </span></a></li>
		<li><a href="checkfees.php"><span>View Payment History </span></a></li>
		<li><a href="viewsubjectteacher.php"><span>Subject teachers List</span></a></li>
		
		</ul>
		</div>
<?php
        break;
    case "Teacher":

 $query="SELECT fname,mname,lname  from teachersinfo where id='$login_session'";
 $execute=mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($execute);
$loginname= $row["fname"]." ".$row["mname"]." ".$row["lname"];

?>
      <h1 align="center"><?php echo $loginname; ?></h1>
	  <p align="center" style=" margin-left: 50px;margin-top: -30px;"> <?php echo $login_role ; ?></p>

		<div align="center">
		<ul >
		<li><a href="updateinfo.php"><span>Edit Your Info </span></a></li>
		<li ><a href="attendance.php"><span>Attendance </span></a></li>
		<li><a href="addresult.php"><span>Add Result </span></a></li>
		<li><a href="createclass.php"><span>Create classroom </span></a></li>
		<li><a href="removeclass.php"><span>Remove Classroom </span></a></li>
		<li ><a href="updateattendance.php"><span>Update Attendance </span></a></li>
		<li><a href="updateresult.php"><span>Update Result </span></a></li>
		<li><a href="viewresult.php"><span>View Result </span></a></li>
		<li ><a href="viewattendance.php"><span>View Attendance </span></a></li>
		<li><a href="viewstudentinfo.php"><span>View Student Info </span></a></li>
		<li><a href="viewsubjectteacher.php"><span>Subject teachers List</span></a></li>
		</ul>		
		</div>
		
<?php
        break;
    case "Administator":
 $query="SELECT fname,mname,lname  from teachersinfo where id='$login_session'";
 $execute=mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($execute);
$loginname= $row["fname"]." ".$row["mname"]." ".$row["lname"];

?>
      <h1 align="center"><?php echo $loginname; ?></h1>
	  <p align="center" style=" margin-left: 50px;margin-top: -30px;"> <?php echo $login_role ; ?></p>



		<div align="center">
		<ul >		
		<li><a href="updateinfo.php"><span>Edit Your Info </span></a></li>
		<li ><a href="addteacher.php"><span>Add Teacher/Office assistant </span></a></li>
		<li ><a href="addsubject.php"><span>Add Subject </span></a></li>
		<li ><a href="addfeestype.php"><span>Add New Fees Type</span></a></li>
		<li ><a href="subjectteacher.php"><span>Subject Teacher Assign</span></a></li>
		<li><a href="viewsubjectteacher.php"><span>Subject teachers List</span></a></li>
		<!-- <li><a href=""><span>Remove Teacher/Clark </span></a></li>
		<li ><a href="#"><span>Remove Subject </span></a></li>
		<li ><a href="#"><span>Remove  Fees Type</span></a></li> -->
		
		
		
		</ul>
		</div>
		
<?php
        break;
case "Office assistant":

 $query="SELECT fname,mname,lname  from teachersinfo where id='$login_session'";
 $execute=mysqli_query($con,$query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($execute);
$loginname= $row["fname"]." ".$row["mname"]." ".$row["lname"];

?>
      <h1 align="center"><?php echo $loginname; ?></h1>
	  <p align="center" style=" margin-left: 50px;margin-top: -30px;"> <?php echo $login_role ; ?></p>

		<div align="center">
		<ul >		
		<li><a href="updateinfo.php"><span>Edit Your Info </span></a></li>
		<li ><a class="button"href="ApplyOnline.php"><span>Admission </span></a></li>
		<li><a href="viewresult.php"><span>View Result </span></a></li>
		<li ><a href="viewattendancestd.php"><span>View Attendance </span></a></li>		
		<li ><a href="canceladmisson.php"><span>Cancel Admission </span></a></li>
		<li><a href="removefees.php"><span>Remove fees</span></a></li>
		<li><a href="addfees.php"><span>Add fees </span></a></li>
		<li ><a href="checkfees.php"><span>Ckeck Fees </span></a></li>
		<li><a href="viewfinancialstatement.php"><span>View Financial statement </span></a></li>		
		</ul>			
		</div>
		
		
<?php
        break;    
    default:
?>
        <h1>Welcome <?php echo $login_session ; ?></h1>
	    <h1>Role <?php echo $login_role ; ?></h1>
<?php
} 




?>









	  
      <h3 align="center" text-color="red"><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>