

<?php
include("backtohomepage.php");
?>
<div align="center" style=" margin-top: 50px;">
<form action="" method="POST">
 <p>Student Id:&nbsp;
	<input type="text" name="id" required></br>
</p>
 <p>Receipt Number:&nbsp;
	<input type="text" name="receiptid" required></br>
</p>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="removefees" value="Apply">

</form>

</div>










<?php
include('DBcon.php');
include('session.php');
if(isset($_POST["removefees"])){
$id=$_POST["id"];
$receiptid=$_POST["receiptid"];

$query="DELETE  FROM fees WHERE id ='$id' and receiptid='$receiptid'";
$execute=mysqli_query($con,$query) or die(mysqli_error($con));

				if($execute){
?>					
				<script type="text/javascript">
					alert("Fees Remove From Database Sucessfully.\n");window.location.href='removefees.php';
				</script>
<?php					
					}
					else{
?>
				<script type="text/javascript">
					alert("Fees Remove From Database Operation Failed.\n");window.location.href='removefees.php';
				</script>

<?php
					}
			

	

}

?>	











