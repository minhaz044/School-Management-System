<?php include("backtohomepage.php"); ?>

<div align="center" style=" margin-top: 50px;">
<form action="" method="POST">
 <p>Student Id:&nbsp;
	<input type="text" name="id" required></br>
</p>

<!-- <p>Date(yyyy-mm-dd):&nbsp;
	<input type="Date" name="date" value="<?php //echo  date("Y-m-d");?>"></br>
</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR
<p>Payment Receipt No:&nbsp;
	<input type="text" name="receiptid" ></br>
			
</p>
-->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="Apply">

</form>

</div>










<?php

include('DBcon.php');
include('session.php');
if(isset($_POST["submit"])){
$id=$_POST["id"];
$query="DELETE  FROM studentinfo WHERE id ='$id'";
$execute=mysqli_query($con,$query) or die(mysqli_error($con));
$query2="DELETE  FROM signup WHERE id ='$id'";
$execute2=mysqli_query($con,$query2) or die(mysqli_error($con));

				if($execute & $execute2){
?>					
				<script type="text/javascript">
					alert("Student Remove From Database Sucessfully.\n");window.location.href='canceladmisson.php';
				</script>
<?php					
					}
					else{
?>
				<script type="text/javascript">
					alert("Student Removal From Database Operation Failed.\n");window.location.href='canceladmisson.php';
				</script>

<?php
					}
			

	

}

?>	











