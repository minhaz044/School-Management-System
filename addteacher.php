<?php
include("backtohomepage.php");
include("session.php");
?>
<html>

<head>
<title>PHP Basic</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

   
<Div id="all-content">
<form style="  margin-top: 80px;"action="insertteacher.php" method="POST">

<!--------------------Online apply------------------->
 
<p> Name:</br>
 <input type="text" name="fname"  placeholder="First name" required>&nbsp;<input type="text" name="mname"  placeholder="Middle name" >&nbsp;<input type="text" name="lname"  placeholder="Last name"></br>
 </p>
 <p>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
	<select name="gender" required>
    <option value="M">Male</option>
    <option value="F">Female</option>
    <option value="O">Other</option>
	</select required></br>
	
</p>
 <p>Religion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
	<select name="religion" required>
    <option value="Islam"> Islam</option>
    <option value="Hinduism"> Hinduism</option>
	<option value="Buddhists"> Buddhists</option>
	<option value="Christians"> Christians</option>
	<option value="Animist"> Animist</option>
    <option value="Other">Other</option>
	</select ></br>
	
</p>
 
<p> Serial No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="number" name="serialno" required></br>
</p>
 <p>Role:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
	<select name="role" required>
    <option value="Teacher"> Teacher</option>
    <option value="Administator"> Administator</option>
	<option value="Office assistant"> Office assistant</option>
	</select></br>
	
</p>



 <p> Fathers Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="faname"  placeholder="Fathers Name" required></br>
 </p>
<p> Mothers Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="moname"  placeholder="Mothers Name" required></br>
 </p>
<p> Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="date" name="bdate"  required></br>
 </p>
 <p> Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text"  name="address" required></br>
 </p>
 
 
 <p> Contact  no:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="contact" required></br>
 </p>
 
 
 
  <p>E-Mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="email" name="email" required></br>
 </p>
 
  <p>Create Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="password" name="crpassword"required ></br>
 </p>
 
   <p>Confarm Password:&nbsp;&nbsp;&nbsp;
 <input type="password" name="copassword" required></br>
 </p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Apply">

</form>

</div>
</body>
</html>