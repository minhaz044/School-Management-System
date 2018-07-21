<?php
include("session.php");
include("backtohomepage.php");
?>

<html>

<head>
<title>View Attendance</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
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


<!--------------------View Attendance------------------->

<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">
 <p>Class:&nbsp;
	<select name="cls" requirecd>
	<option value="">Select Class</option>
	<option value="">----------------</option>
    <option value="06"> Class 6</option>
    <option value="07"> Class 7</option>
	<option value="08"> Class 8</option>
	<option value="09"> Class 9</option>
	<option value="10"> Class 10</option>
	</select></br>	
</p>
 <p>Section:&nbsp;
	<select name="sec"requirecd>
	<option value="">Select Section</option>
	<option value="">----------------</option>
    <option value="A"> A</option>
    <option value="B"> B</option>
	<option value="C"> C</option>
	<option value="D"> D</option>
	<option value="E"> E</option>
	</select></br>	
</p>

</p>
<!-- <p>Month:&nbsp;
	<select name="month">
    <option value="1"> January</option>
    <option value="2"> February</option>
	<option value="3"> March</option>
	<option value="4"> April</option>
	<option value="5"> May</option>
	<option value="6"> June</option>
    <option value="7"> July</option>
	<option value="8"> August</option>
	<option value="9"> September</option>
	<option value="10"> October</option>
	<option value="11"> November</option>
	<option value="12"> December</option>

</select></br>
 -->
 <p>Date:&nbsp;
 <input type="date" name="date" value=<?php echo date("Y"); ?> ></br>
</p>




&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="checkattendance" value="Apply">

</form>

</body>
</html>





<?php
if(isset($_POST["checkattendance"])){
include("DBcon.php");
$cls=(int)$_POST["cls"];
$sec=$_POST["sec"];
$date=$_POST["date"];
$year=date('Y', strtotime($date));
?>



<div align="center" >
<strong>Attendance :<?php echo"$cls"."("."$sec".")";?></strong> </br>
<table >
  <tr>
    <th><strong>Roll No</strong></th>
    <th><strong>Id </strong></th>
    <th><strong>Attendance</strong></th>
  </tr>
  
 
 <?php 
 $query="SELECT id,roll FROM classroom WHERE class='$cls' AND section='$sec' AND year='$year' ORDER BY roll";
 $result=mysqli_query($con,$query) or die(mysqli_error($con));
  if(mysqli_num_rows($result)>=0){
  while($row = mysqli_fetch_assoc($result)) {
	  $checkid=$row['id'];
	$query2="select remark from attandance WHERE id='$checkid' And date='$date'";
	$result2=mysqli_query($con,$query2) or die(mysqli_error($con));
	  $row2 = mysqli_fetch_assoc($result2);
  
    		
?>
	
<tr>
	<td style="align=center;" ><?php echo $row["roll"]; ?></td>
    <td><?php echo $row["id"];?></td>
	<td><?php echo $row2["remark"]; ?></td>
    
	
</tr>	 
<?php
  }

  }
}
?>	
 
</table>

</div>
</body>
</html>