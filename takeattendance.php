<?php
include("backtohomepage.php");
include("DBcon.php");
include('session.php');
$cls=(int)$_POST["cls"];
$sec=$_POST["sec"];
$date=$_POST["adate"];
$year=substr("$date",0,4);
$i=0;
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
	border: 3px solid #dddddd;
	
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
	
}
th{
	
	text-align:center;
}


tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<div align="center" >
<strong>Class Attendance :<?php echo"$cls"."("."$sec".")";?></strong> </br>
<table >
  <tr>
    <th><strong>ID</strong></th>
    <th><strong>Roll</strong></th>
    <th><strong>Name</strong></th>
	<th colspan="2"><strong>Remark</strong></th>
  </tr>
  
  
  
  <form style=" margin-left: 350px; margin-top: 80px;"action="submitattendance.php" method="POST">
  <div><input  type="hidden" name="date" value="<?php echo $date;?>"> 
       <input  type="hidden" name="cls" value="<?php echo $cls;?>"> 
	   <input  type="hidden" name="sec" value="<?php echo $sec;?>"> </div>
 <!------------1st data classromm thake nelam,then oi id dea studentinfo thake data nelam----------->
 <?php 
 
	$query="select * from classroom WHERE year='$year' and class='$cls' And section='$sec' ORDER BY roll";
	$result=mysqli_query($con,$query) or die(mysql_error());

 
 
 if(mysqli_num_rows($result)>0){
	 
	 
	 while($row = mysqli_fetch_assoc($result)) {
        
		
?>
<div><input  type="hidden" name="rollno[]" value="<?php echo $row["id"];?>"> </div>
<?php
		
		
		$query2="SELECT fname,mname,lname FROM studentinfo  where id='$row[id]'";
		$result2=mysqli_query($con,$query2) or die(mysql_error());
		
        $row2=null;
	if(mysqli_num_rows($result2)==1){
		$row2 = mysqli_fetch_assoc($result2);
			
		}
	else {
			
			echo"Wrong input  .plz try again \n";
			// javascript code goes here (akta box debo and back to previous page)
			
		}
		
		
?>
	
<tr>
	<td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["roll"];?></td>
    <td><?php echo $row2["fname"]." ".$row2["mname"]." ".$row2["lname"];?></td>
	<td><input type="radio" name="attendance[<?php echo $i;?>]" value="<?php echo $row["id"];?>">Yes</td>
	<td><input type="radio" name="attendance[<?php echo $i;?>]" value="">No</td>
	
	
	
	



	
	
	
	
</tr>	 
<?php
$i++;
	 }	 
 }
 else {
	 Echo"No Data Found";
 }
	 

?>	
 
</table>
<input type="submit" name="submit]" value="SuBMIT">
</form>
</div>
</body>
</html>