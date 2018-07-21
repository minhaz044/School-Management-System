<?php
include("backtohomepage.php");
include("DBcon.php");
include("session.php");
$query="select * from subject";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>
<html>

<head>
<title>Subject Teacher Assign</title>
</head>
<body>

   

<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">

<!--------------------Add Subject------------------->
 


 <p> Teachers Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="teachersid"  required></br>
 </p>
 <p> 
  Subject Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="subjectcode" required>
  <option > </option>
 <?php
if(mysqli_num_rows($result)>=0){
			while($row = mysqli_fetch_assoc($result)) {
?>
    <option value="<?php echo $row["subjectcode"]; ?>"> <?php echo $row["subjecttitle"]; ?></option>
<?php
	}
}
?>
 	</select ></br>
 
 

<p>

 <p>Class:&nbsp;
	<select name="cls" required>
	<option > </option>
    <option value="06"> Class 6</option>
    <option value="07"> Class 7</option>
	<option value="08"> Class 8</option>
	<option value="09"> Class 9</option>
	<option value="10"> Class 10</option>
	</select></br>	
</p>
 <p>Section:&nbsp;
	<select name="sec" required>
	<option > </option>
    <option value="A"> A</option>
    <option value="B"> B</option>
	<option value="C"> C</option>
	<option value="D"> D</option>
	<option value="E"> E</option>
	</select></br>	
</p>
<p>Role:&nbsp;
	<select name="role" required>
	<option > </option>
    <option value="Class Teacher"> Class Teacher</option>
    <option value="Subject Teacher"> Subject Teacher</option>

	</select></br>	
</p>
<p> year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="year" value="<?php echo date("Y"); ?>" required></br>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="addsubject" value="Add Subject"></p>

</form>


</body>
</html>




<?php

if(isset($_POST["addsubject"])){
	include("DBcon.php");
	include("session.php");
	$cls=$_POST["cls"];
	$sec=$_POST["sec"];
	$subjectcode=$_POST["subjectcode"];
	$teachersid=$_POST["teachersid"];
	$year=$_POST["year"];
	$role=$_POST["role"];
	$query="INSERT INTO subjectteacher values('$subjectcode','$teachersid','$year','$cls','$sec','$role')";
	$execute=mysqli_query($con,$query) or die(mysqli_error($con));
	if($execute){
?>
		<script type="text/javascript">
				alert("Add Subject Successfull.\n Back to Previous Page");window.location.href='subjectteacher.php';
		</script>
<?php
	}
	else{
?>
		<script type="text/javascript">
				alert("Data INsertion Failed.\n Plz try again");window.location.href='subjectteacher.php';
		</script>
<?php
	}


}


?>