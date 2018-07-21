<?php
include("backtohomepage.php");
include("session.php");

?>
<!DOCTYPE html>
<html>

<head>
<title>Result</title>

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
	text-align:center;
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

  



<!--------------------Result------------------->
 


<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">
<?php 
	if($login_role=="Student"){
	
?>

<input  type="hidden" name="id" value="<?php echo $login_session;?>">

<?php
		}
	else {
?>
 <p>ID:&nbsp;
	
	<input type="text" name="id" required>
	</br>	
</p>
<?php
	}
?>

<p>Exam Type:&nbsp;
	<select name="type" required >
	<option value="">Select Exam Type</option>
	<option value="">----------------</option>
    <option value="ce"> Class Exam</option>
    <option value="we"> Weakly Exam</option>
	<option value="me"> Monthly Exam</option>
	<option value="te"> Term Exam</option>
	<option value="fe"> Final Exam</option>
	</select></br>		
</p>
 <p>Number(Example: Class Test 1):&nbsp;
   <input type="number" name="examsno" value="1" min="1" max="365" required></br>
 
</p>


 <p>Year:&nbsp;
 <input type="Text" name="year" value="<?php echo date("Y"); ?>" required></br>
</p>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit"value="Apply">

</form>
































<?php
if(isset($_POST["submit"])){
include("DBcon.php");
$id=$_POST["id"];
$type=$_POST["type"];
$examsno=$_POST["examsno"];
$year=$_POST["year"];
?>



<div align="center" >
<strong>Result For :<?php echo"$id"."("."$type".")";?></strong> </br>
<table >
  <tr>
    <th><strong>Subject</strong></th>
    <th><strong>Theory</strong></th>
    <th><strong>Practical</strong></th>
	<th><strong>Mcq</strong></th>
	
  </tr>
  
 
 <?php 
 
	$query="select * from result WHERE id='$id' And examtype='$type' And year='$year' And examsno='$examsno' ORDER BY subject";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
 
 
 if(mysqli_num_rows($result)>=0){
	 
	 
	 while($row = mysqli_fetch_assoc($result)) {
   		
?>
	
<tr>
	<td><?php echo $row["subject"]; ?></td>
    <td><?php echo $row["theory"];?></td>
	<td><?php echo $row["practical"]; ?></td>
    <td><?php echo $row["mcq"];?></td>
	
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