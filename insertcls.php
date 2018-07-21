<?php 
include('DBcon.php');
	$i=$j=1;
	$year=date("Y");
	$section=$_POST["sec"];
	$class=(int)$_POST["cls"];;

if(isset($_POST["submit"])){ 
	if(!empty($_POST["id"]) && !empty($_POST["roll"])){
	

		foreach($_POST["id"] as $sid){
			$id[$i++]=$sid;
			$rangei=$i;
	
			
		}
		foreach($_POST["roll"] as $sroll){
			$roll[$j++]=$sroll;
			$rangej=$j;
		}
		//echo"$rangei";echo"$rangej";
		if($rangei ==$rangej=$j){
			for($start=1;$start<$rangei;$start++){
				$myid=$id[$start];
				$myroll=(int)$roll[$start];
				$query="INSERT INTO classroom(id,roll,year,class,section) values('$myid','$myroll','$year','$class','$section')";
				$execute=mysqli_query($con,$query);
				if(!$execute) {
				echo " Data insertion failed! "."            "." Roll "."$myroll </br>";
				$all_inserted=false;
				
			}
			//akhane akta javascript file bosabo
			}
			
		
		
				
		
		
		
		
		
		}
		
		
	//if(!$all_inserted){
		
		
		
		
		
		
		
		
		
		

		
	}
	
	
	
	
	
	
	
	
	
	
}
