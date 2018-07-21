<?php
include("backtohomepage.php");
include('DBcon.php');
include('session.php');
$rollno=$_POST["rollno"];
$year=$_POST["year"];
$cls=$_POST["cls"];
$type=$_POST["type"];
$subject=$_POST["sub"];
$examsno=$_POST["examsno"];
$sec=$_POST["sec"];
$theory=$_POST["theory"];
$mcq=$_POST["mcq"];
$practical=$_POST["practical"];
$madeby=$_SESSION['login_user'];
$totalstd=count($rollno);

if($totalstd>0){
	$theorymarks=00;
	$mcqmarks=00;
	$practicalmarks=00;
	for($i=0;$i<$totalstd;$i++){
		$id=$rollno[$i];
		$theorymarks=00;
		$mcqmarks=00;
		$practicalmarks=00;
		if($theory[$i]!=null || $mcq[$i]!=null || $practical[$i]!=null){
			if($theory[$i]!=null ){$theorymarks=$theory[$i];}else {Echo"No Theory Marks,";}
			if($mcq[$i]!=null){$mcqmarks=$mcq[$i];}else {Echo"No MCQ Marks,";}
			if($practical[$i]!=null){$practicalmarks=$practical[$i];}else {Echo"No Practical Marks.";}
			$query="insert into result(id,subject,year,class,examtype,examsno,sec,theory,practical,mcq ) values ('$id','$subject','$year','$cls','$type','$examsno','$sec','$theorymarks','$practicalmarks','$mcqmarks' )";
			$execute=mysqli_query($con,$query) or die(mysqli_error($con));
				
				
				if($execute){
					echo"DONE</br>";}//here goes javascript message.
				else {
					echo " Data insertion failed! </br> Try Again!";}//here goes javascript message.
				}
		}

		if($execute){
			
		echo"DONE\n";}//here goes javascript message.
		else {echo " Data insertion failed! </br> Try Again!";}//here goes javascript message.
		}
	
else {
	
echo "All Student us not Selected\n Please Select All Student Then Submit";
}





?>