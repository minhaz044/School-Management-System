<?php
include("session.php");
include("backtohomepage.php");
?>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 85%;
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
<title>Check Info</title>
</head>
<body>

   



<!--------------------Check Info------------------->
 

<div align="center" style=" margin-top: 50px;">
<form action="" method="POST">



<?php
if($login_role=="Student"){
?>
	
<input type="hidden" name="id" value=<?php echo $login_session; ?>  ></br>

<?php	
}
else{
?>
	<p>Id:&nbsp;
	 <input type="text" name="id"  required></br>
	</p>

<?php
}
?>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="View Payment Histry">

</form>

</div>



<?php

include('DBcon.php');
include('session.php');
if(isset($_POST["submit"])){
$id=$_POST["id"];
//$date=$_POST["date"];
//$receiptid=$_POST["receiptid"];
$receiver=$_SESSION['login_user'];
$query="SELECT * FROM fees WHERE ID='$id' ORDER BY date DESC";
$execute=mysqli_query($con,$query) or die(mysqli_error($con));

				if(!$execute){
?>					
				<script type="text/javascript">
					alert("Fees Added Sucessfully.\n");window.location.href='addfees.php';
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

}

?>			
</table>
</div>


</body>
</html>

 
