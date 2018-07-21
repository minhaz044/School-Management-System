<?php
   include("DBcon.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myid = mysqli_real_escape_string($con,$_POST['id']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
	  $myrole = mysqli_real_escape_string($con,$_POST['role']);
      
      $query = "SELECT id FROM signup WHERE id = '$myid' and password = '$mypassword' and role='$myrole'";
      $execute = mysqli_query($con,$query);
      $row = mysqli_fetch_array($execute,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($execute);
      
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
		 
         $_SESSION['login_user'] = $myid;
		 $_SESSION['login_role'] = $myrole;
		 $_SESSION['login_password'] = $mypassword;
		 
		 header("location: homepage.php");
		
         
      }else {
?>
			<script type="text/javascript">
				alert("Your Id or Password in incorrect.\n Plz try again");window.location.href='index.php';
			</script>
<?php			
      }
   }
?>

























