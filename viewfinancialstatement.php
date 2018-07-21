<?php
include('session.php');
include("backtohomepage.php");
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
<div align="center" style=" margin-top: 50px;">
<form action="" method="POST">
 <p>From Date :&nbsp;
	<input type="date" name="fromdate" value="<?php echo  date("Y-m-d");?>"required></br>
</p>
 <p>To Date:&nbsp;
	<input type="Date" name="todate" value="<?php echo  date("Y-m-d");?>" required></br>
</p>
 <p>Student Id(For Student,Else leave this Field Empty):&nbsp;
	<input type="text" name="id" ></br>
</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="financialstatement" value="Apply">

</form>

</div>




<?php
if(isset($_POST["financialstatement"])){
include('DBcon.php');
$fromdate=$_POST["fromdate"];
$todate=$_POST["todate"];
$id=$_POST["id"];
$query=$query2=null;
$total=0;

if(!empty($id) && !empty($fromdate) && !empty($todate)){
	$query="SELECT * FROM fees WHERE ID='$id'  AND date between '$fromdate' AND '$todate' ORDER BY date DESC";
	$query2="SELECT COUNT(amount)FROM fees WHERE ID='$id'  AND date between '$fromdate' AND '$todate'";
}
else if(empty($id) && !empty($fromdate)&& !empty($todate)){
		$query="SELECT * FROM fees WHERE date between '$fromdate' AND '$todate' ORDER BY date DESC";
		$query2="SELECT COUNT(amount)FROM fees WHERE date between '$fromdate' AND '$todate'";
	
}
else {
?>
	<script type="text/javascript">
			alert("Query Execution Failed .\n");window.location.href='viewfinancialstatement.php';
	</script>	
	
<?php
	
}
$execute=mysqli_query($con,$query) or die(mysqli_error($con));
$execute2=mysqli_query($con,$query2) or die(mysqli_error($con));

				if(!$execute || !$execute2){

?>
	<script type="text/javascript">
			alert("Query Execution Failed .\n");window.location.href='viewfinancialstatement.php';
	</script>
<?php 
				}
			else{
?>
	<div align="center">
	<table >
	<tr>
		<th><strong>Date</strong></th>
		<th><strong>Receipt Id</strong></th>
		<th><strong>Desctription</strong></th>
		<th ><strong>Amount</strong></th>
	</tr>

<?php 
		
		if(mysqli_num_rows($execute)>=0){
		while($row = mysqli_fetch_assoc($execute)) {
			$total+= $row["amount"];
?>		

<tr>
	<td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["receiptid"];?></td>
	<td><?php echo $row["description"];?></td>
	<td><?php echo $row["amount"];?></td>
</tr>
		
			
<?php			
			}
		} 


		
	}
?>
	<tr>
 <th colspan="3" style="text-align:center">Total</th>
  <th ><?php echo $total." TK";?></th>
 </tr>
<?php
}
?>
</table>
</div>
</body>
</html>
