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
<?php
if($login_role=="Student"){
?>
	
<input type="hidden" name="id" value=<?php echo $login_session; ?>  ></br>

<?php	
}
else{
?>
	<p>Id:&nbsp;
	 <input type="text" name="id"  required></br>
	</p>

<?php
}
?>

	<p>Month:&nbsp;
	<select name="month" required>
	<option value=""> Select Month</option>
	<option value=""> ----------</option>
    <option value="01"> January</option>
    <option value="02"> February</option>
	<option value="03"> March</option>
	<option value="04"> April</option>
	<option value="05"> May</option>
	<option value="06"> June</option>
    <option value="07"> July</option>
	<option value="08"> August</option>
	<option value="09"> September</option>
	<option value="10"> October</option>
	<option value="11"> November</option>
	<option value="12"> December</option>

</select></br>

 <p>Year:&nbsp;
 <input type="text" name="year" value=<?php echo date("Y"); ?> required></br>
</p>




&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="checkattendance" value="Apply">

</form>

</body>
</html>





<?php
if(isset($_POST["checkattendance"])){
include("DBcon.php");

$id=$_POST["id"];
$year=$_POST["year"];
$month=$_POST["month"];
$searchitem1=$year."-".$month."%";
?>



<div align="center" >
<strong>Attendance :<?php echo"$id";?></strong> </br>
<table >
  <tr>
    <th><strong>Date</strong></th>
    <th><strong>Attendance </strong></th>

  </tr>
  
 
 <?php 
 $query="SELECT remark,date FROM attandance WHERE id='$id' AND date LIKE '$searchitem1' ORDER BY date";
 $result=mysqli_query($con,$query) or die(mysqli_error($con));
  if(mysqli_num_rows($result)>=0){
  while($row = mysqli_fetch_assoc($result)) {
 
    		
?>
	
<tr>
	<td style="align=center;" ><?php echo $row["date"]; ?></td>
	<td><?php echo $row["remark"]; ?></td>
    
	
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