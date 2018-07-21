<?php
 include('DBcon.php');
  include('session.php');
 $query="SELECT fname,mname,lname  from teachersinfo where id='$login_session'";
 $execute=mysqli_query($con,$query) or die(mysqli_error($con));
			$row = mysqli_fetch_assoc($execute);
				$name=$row["fname"]." ".$row["mname"]." ".$row["lname"];
			echo $name;
 
 ?>