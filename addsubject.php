<?php
include("backtohomepage.php");
include("session.php");
?>
<html>

<head>
<title>Add Subject</title>
</head>
<body>

   

<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">

<!--------------------Add Subject------------------->
 

 <p> Subject Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="subjectname"  required></br>
 </p>
<p> Subject Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="subjectcode" required></br>
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
	$subjectname=$_POST["subjectname"];
	$subjectcode=$_POST["subjectcode"];

	$query="INSERT INTO subject values('$subjectname','$subjectcode')";
	$execute=mysqli_query($con,$query) or die(mysqli_error($con));
	if($execute){
?>
		<script type="text/javascript">
				alert("Add Subject Successfull.\n Plz try again");window.location.href='addsubject.php';
		</script>
<?php
	}
	else{
?>
		<script type="text/javascript">
				alert("Data INsertion Failed.\n Plz try again");window.location.href='addsubject.php';
		</script>
<?php
	}


}


?>