<?php
include("backtohomepage.php");
include("session.php");
include("DBcon.php");
if($login_role=="Student"){
$query="select * from studentinfo where id='$login_session'";
}
else {$query="select * from teachersinfo where id='$login_session'";}

$result=mysqli_query($con,$query) or die(mysqli_error($con));
 $row = mysqli_fetch_assoc($result);
 $query2="select * from signup where id = '$login_session'";
 $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
 $row2 = mysqli_fetch_assoc($result2);
 ?>



<html>

<head>
<title>PHP Basic</title>

<style>
@media screen and (max-width:786px){

body{
	width:200px;
}
#all-content{
	margin:25px;
}


}
</style>
</head>
<body>
 <Div id="all-content">
<!--------------------Update Profile Information------------------->
<form style="  margin-top: 80px;"method="POST" action="update.php" >

<p> Name*:</br>
 <input type="text" name="fname"  value ="<?php echo $row["fname"]; ?>"placeholder="First name"required>&nbsp;
 <input type="text" name="mname" value ="<?php echo $row["mname"]; ?>" placeholder="Middle name">&nbsp;
 <input type="text" name="lname" value ="<?php echo $row["lname"]; ?>" placeholder="Last name"></br>
 </p>
 <p>Gender*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
	<select name="gender"required>
    <option value="M">Male</option>
    <option value="F">Female</option>
    <option value="O">Other</option>
	</select></br>
	
</p>
 <p>Religion*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
	<select name="religion" required>
    <option value="Islam"> Islam</option>
    <option value="Hinduism"> Hinduism</option>
	<option value="Buddhists"> Buddhists</option>
	<option value="Christians"> Christians</option>
	<option value="Animist"> Animist</option>
    <option value="Other">Other</option>
	</select></br>
	
</p>
 

 
 <p> Fathers Name*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="faname" value ="<?php echo $row["faname"]; ?>" placeholder="Fathers Name"required></br>
 </p>
<p> Mothers Name*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="moname" value ="<?php echo $row["moname"]; ?>" placeholder="Mothers Name"required></br>
 </p>
<p> Date of Birth*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="date" name="bdate"value ="<?php echo $row["bdate"]; ?>" required ></br>
 </p>
 <p> Address*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text"  name="address"value ="<?php echo $row["address"]; ?>"required></br>
 </p>
 
 
 <p> Contact  no*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="contact"value ="<?php echo $row["contact"]; ?>"required></br>
 </p>
 
 
 
  <p>E-Mail*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="email" name="email" value ="<?php echo $row2["email"]; ?>"required></br>
 </p>
 
  <p>Old Password*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="password" name="opassword" required></br>
 </p>
  <p>New Password*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="password" name="npassword" required></br>
 </p>
 
   <p>conferm Password*:&nbsp;&nbsp;&nbsp;
 <input type="password" name="copassword" required></br>
 </p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Apply">

</form>
</div>

</body>
</html>