<?php
include("backtohomepage.php");
include("DBcon.php");
include("session.php");
$query="select * from subjectteacher where teachersid='$login_session' AND role='class teacher'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>
<html>

<head>
<title>Remove Class Room</title>
</head>
<body>

   



<!--------------------Online apply------------------->
 


<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">
 <p>Class:&nbsp;
	<select name="cls">
    <?php
if(mysqli_num_rows($result)>=0){
			while($row = mysqli_fetch_assoc($result)) {
?>
    <option value="<?php echo $row["class"]; ?>"> <?php echo $row["class"]; ?></option>
<?php
	}
}
?>
    <!--<option value="06"> Class 6</option>
    <option value="07"> Class 7</option>
	<option value="08"> Class 8</option>
	<option value="09"> Class 9</option>
	<option value="10"> Class 10</option>-->
	</select></br>	
</p>
 <p>Section:&nbsp;
	<select name="sec">
    <?php
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>=0){
			while($row = mysqli_fetch_assoc($result)) {
?>
    <option value="<?php echo $row["section"]; ?>"> <?php echo $row["section"]; ?></option>
<?php
	}
}
?>
    <!--<option value="A"> A</option>
    <option value="B"> B</option>
	<option value="C"> C</option>
	<option value="D"> D</option>
	<option value="E"> E</option>-->
	</select></br>	
</p>
<p>Year:&nbsp;
<input type="text" name ="year" value=<?php echo date("Y"); ?>  required>
 </p></br>

 
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name ="removeclass"value="Apply">

</form>
</body>
</html>
<?php 
if(isset($_POST["removeclass"])){
	include("DBcon.php");
	$cls=$_POST["cls"];
	$sec=$_POST["sec"];
	$year=$_POST["year"];
	$query="DELETE FROM classroom WHERE class='$cls' AND section='$sec'AND year='$year'";
	
	
	
	$execute=mysqli_query($con,$query) or die(mysqli_error($con));
	if($execute){
?>
		<script type="text/javascript">
				alert("Add Fees Type Successfull.\n Plz try again");window.location.href='removeclass.php';
		</script>
<?php
	}
	else{
?>
		<script type="text/javascript">
				alert("Data INsertion Failed.\n Plz try again");window.location.href='removeclass.php';
		</script>
<?php
	}
}




?>