<?php
include("backtohomepage.php");
include("DBcon.php");
include("session.php");
$query="select * from subjectteacher where teachersid='$login_session'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>

<html>

<head>
<title>Remove Class Room</title>
</head>
<body>

   



<!--------------------Online apply------------------->
 


<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">
<p>Student Id:&nbsp;
<input type="text" name ="id" required>
 </p>
 
<p>Class:&nbsp;
	<select name="cls">
    <?php
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
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
 <p>Subject:&nbsp;
	<select name="sub">
    <?php
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>=0){
			while($row = mysqli_fetch_assoc($result)) {
?>
    <option value="<?php echo $row["subjectid"]; ?>"> <?php echo $row["subjectid"]; ?></option>
<?php
	}
}
?>
    <!--<option value="ban-1">Bangla 1 101 </option>
    <option value="ban-2"> Bangla 2 102</option>
	<option value="eng-1"> English 1 107</option>
	<option value="eng-2"> English 2 108</option>
	<option value="mth">Mathematics 109</option>
	<option value="phy"> Physics 136</option>
	<option value="che">Chemistry 137</option>
	<option value="hmth">Higher Mathematics 126 </option>
    <option value="Bio"> Biology 138</option>
	<option value="com">Computer 131 </option>-->
	</select></br>
<p>Exam Type:&nbsp;
	<select name="type" required>
	 <option value=""> Exam Type</option>
    <option value=""> -------------</option>
    <option value="ce"> Class Exam</option>
    <option value="we"> Weakly Exam</option>
	<option value="me"> Monthly Exam</option>
	<option value="te"> Term Exam</option>
	<option value="fe"> Final Exam</option>
	</select></br>		
</p>
 <p>Number(Example: Class Test 1):&nbsp;
   <input type="number" name="examsno" value="1" min="1" max="365"></br>
 
</p>
<p>Theory Marks:&nbsp;
<input type="number" name ="theory">
 </p>
 <p>MCQ Marks:&nbsp;
<input type="number" name ="mcq">
 </p>
 <p>Practical Marks:&nbsp;
<input type="number" name ="practical">
 </p>

 
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name ="updateattendance"value="Apply">

</form>
</body>
</html>
<?php 
if(isset($_POST["updateattendance"])){
	include("DBcon.php");
	$id=$_POST["id"];
	$cls=$_POST["cls"];
	$sec=$_POST["sec"];
	$sub=$_POST["sub"];
	$type=$_POST["type"];
	$examsno=$_POST["examsno"];
	$theory=$_POST["theory"];
	$mcq=$_POST["mcq"];
	$practical=$_POST["practical"];

	
	
	$query="UPDATE result SET theory='$theory' ,mcq='$mcq' ,practical='$practical' WHERE id='$id' AND class='$cls' AND sec='$sec' AND subject='$sub' AND examtype='$type' AND examsno='$examsno' ";
	
	
	
	$execute=mysqli_query($con,$query) or die(mysqli_error($con));
	echo "hgfhgfh". mysql_affected_rows();
	if($execute && mysql_affected_rows()!= 0){
?>
		<script type="text/javascript">
			//	alert("Result UpdateSuccessfull.\n Back To Previous Page");window.location.href='updateresult.php';
		</script>
<?php
	}
	else{
?>
		<script type="text/javascript">
			//	alert("Data Update Failed.\n Plz try again");window.location.href='updateresult.php';
		</script>
<?php
	}
}




?>