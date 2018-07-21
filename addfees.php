<?php
include("backtohomepage.php");
include("DBcon.php");
include('session.php');
$query="select * from feesdescription";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>
<html>

<head>
<title>Add fees</title>
</head>
<body>

   



<!--------------------Add Fees------------------->
 


<form style=" margin-left: 350px; margin-top: 80px;"action="" method="POST">
 <p>Student Id:&nbsp;
	<input type="text" name="id" required></br>
</p>
 <p>Description:&nbsp;
	<select name="description" required>
	<option value=""> Select Fees Description</option>
	<option value="">--------------------</option>
<?php
if(mysqli_num_rows($result)>=0){
			while($row = mysqli_fetch_assoc($result)) {
?>
    <option value="<?php echo $row["feestypename"]; ?>"> <?php echo $row["feestypename"]; ?></option>
<?php
}}
?>
	</select></br>	
</p>
 <p>Date(From Payment Receipt):&nbsp;
	<input type="Date" name="date" value="<?php echo  date("Y-m-d");?>" required></br>
</p>
<p>Payment Receipt No:&nbsp;
	<input type="text" name="receiptid" required></br>
			
</p>

<p> Amount of Money :&nbsp
	<input type="number" name="amount" value="1" min="1"required></br>
			
</p>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="Apply">

</form>
</body>
</html>




<?php
include('DBcon.php');
include('session.php');
if(isset($_POST["submit"])){
$id=$_POST["id"];
$date=$_POST["date"];
$description=$_POST["description"];
$amount=$_POST["amount"];
$receiptid=$_POST["receiptid"];
$receiver=$_SESSION['login_user'];
$query="INSERT INTO fees(id,date,amount,description,receiptid,receiver) VALUES('$id','$date','$amount','$description','$receiptid','$receiver')";
$execute=mysqli_query($con,$query) or die(mysqli_error($con));
				if($execute){
?>					
				<script type="text/javascript">
					alert("Fees Added Sucessfully.\n");window.location.href='addfees.php';
				</script>
<?php					
					}
				else {
					
?>				<script type="text/javascript">
					alert("Operation Failed.\n Plz try again");window.location.href='addfees.php';
				</script>
<?php					
				}
				

}

?>