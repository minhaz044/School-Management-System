

<?php
include("backtohomepage.php");
include('session.php');
$limit=(int)$_POST["noofstudent"];
$cls=(int)$_POST["cls"];
$sec=$_POST["sec"];
?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 0%;
	border: 3px solid #dddddd;
	
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
td{
	width: 60%;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<div align="center" >
</br>
<strong>Add Student To Class : <?php echo "$cls"."("."$sec".")";?>  </strong> </br></br>
<form method="post" action="insertcls.php">
<input type='hidden' name='cls' value='<?php echo "$cls";?>'/> 
<input type='hidden' name='sec' value='<?php echo "$sec";?>'/> 
<table >
  <tr>
    <th><strong>Roll</strong></th>
    <th><strong>ID</strong></th>

  </tr>
  
  
  
  
  
  
<?php 

for( $start=1;$start<=$limit;$start++){
?>		
			<tr>
				<td> <input type="number" name="roll[]"  value="<?php  echo"$start";?>" placeholder="Student Roll" required> </td>
				<td> <input type="number" name="id[]" placeholder="Student Id" required> </td>
			    </tr>	
<?php  
			}

?>









</table>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>











