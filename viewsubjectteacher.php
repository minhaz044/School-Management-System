<?php
include("backtohomepage.php");
include("DBcon.php");
include("session.php");
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
<div align="center" style=" margin-top: 50px;">
<form action="" method="POST">
 <p>Year:&nbsp;
	<input type="text" name="year" value=<?php echo date("Y"); ?> required ></br>
</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="viewlist" value="Apply">

</form>

</div>











<?php
if(isset($_POST["viewlist"])){

	$year=$_POST["year"];
?>

<div align="center" >
<strong>Teachers List For : <?php echo $year;?></strong> </br>

<table >
  <tr>
    <th><strong>Class</strong></th>
    <th><strong>Section</strong></th>
	<th ><strong>Subject Name</strong></th>
    <th><strong>Teachers Name</strong></th>
	<th ><strong>Role</strong></th>
  </tr>
  
  

  
 <?php 
 
	$query="select * from subjectteacher WHERE year='$year' ORDER BY class,section";
	$result=mysqli_query($con,$query) or die(mysql_error());

 
 
 if(mysqli_num_rows($result)>0){
	 
	 
	 while($row = mysqli_fetch_assoc($result)) {
       			
		$query2="SELECT fname,mname,lname FROM teachersinfo  where id='$row[teachersid]'";
		$result2=mysqli_query($con,$query2) or die(mysql_error());
		$row2 = mysqli_fetch_assoc($result2);
	
		
		
?>
	
<tr>
	<td><?php echo $row["class"]; ?></td>
    <td><?php echo $row["section"];?></td>
	<td><?php echo $row["subjectid"];?></td>
    <td><?php echo $row2["fname"]." ".$row2["mname"]." ".$row2["lname"];?></td>
	<td><?php echo $row["role"];?></td>
	
	
	
	



	
	
	
	
</tr>	 
<?php

}}} 

?>	
 
</table>
</div>
</body>
</html>








