<?php
include("backtohomepage.php");
include("DBcon.php");
include("session.php");
$query="select * from subjectteacher where teachersid='$login_session'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>





<html>

<head>
<title>Add Result</title>
</head>
<body>

   



<!--------------------Result------------------->
 


<form style=" margin-left: 350px; margin-top: 80px;"action="takeresult.php" method="POST">
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
	<select name="type">
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


 <p>Year:&nbsp;
 <input type="Text" name="year" value=<?php echo date("Y"); ?> ></br>
</p>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Apply">

</form>
</body>
</html>




<?php 






?>