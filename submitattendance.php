<?php
include("backtohomepage.php");
include('DBcon.php');
include('session.php');
$rollno=$_POST["rollno"];
$date=$_POST["date"];
$cls=$_POST["cls"];
$sec=$_POST["sec"];
$attendroll=$_POST["attendance"];
$totalstd=count($rollno);
if(count($attendroll)==count($rollno)){
	for($i=0;$i<$totalstd;$i++){
		$id=$rollno[$i];
		if($attendroll[$i]==$rollno[$i]){
			$remark='P';
		}
		else {$remark='A'; }
		$query="insert into attandance(id,date,remark) values ('$id','$date','$remark')";
		
		$execute=mysqli_query($con,$query) or die(mysqli_error($con));
		if($execute){
			
		echo"DONE\n";}//here goes javascript message.
		else {echo " Data insertion failed! </br> Try Again!";}//here goes javascript message.
		}
	
	
}
else{
	
	
	echo"Select All Student Then SUBMIT";
}





?>