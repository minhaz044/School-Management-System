<?php 
include("backtohomepage.php");
include("session.php");
?>
<html>

<head>
<title>PHP Basic</title>
</head>
<body>

   

<form style=" margin-left: 350px; margin-top: 80px;"action="insert.php" method="POST">

<!--------------------Online apply------------------->
 
<p> Name:</br>
 <input type="text" name="fname"  placeholder="First name" required>&nbsp;<input type="text" name="mname"  placeholder="Middle name">&nbsp;<input type="text" name="lname"  placeholder="Last name"></br>
 </p>
 <p>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
	<select name="gender" required>
	<option >Select Gender </option>
	<option value="">----------------</option>
    <option value="M">Male</option>
    <option value="F">Female</option>
    <option value="O">Other</option>
	</select></br>
	
</p>
 <p>Religion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
	<select name="religion" required>
	<option >Select Religion </option>
	<option value="">----------------</option>
    <option value="Islam"> Islam</option>
    <option value="Hinduism"> Hinduism</option>
	<option value="Buddhists"> Buddhists</option>
	<option value="Christians"> Christians</option>
	<option value="Animist"> Animist</option>
    <option value="Other">Other</option>
	</select></br>
	
</p>
 <p>Class of Admission:&nbsp;
	<select name="cls" required>
	<option >Select Class </option>
    <option value="06"> Class 6</option>
    <option value="07"> Class 7</option>
	<option value="08"> Class 8</option>
	<option value="09"> Class 9</option>
	</select></br>	
</p>


 
<p> Serial No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="serialno"  required></br>
 </p>






 <p> Fathers Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="faname"  placeholder="Fathers Name"required></br>
 </p>
<p> Mothers Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="moname"  placeholder="Mothers Name"required></br>
 </p>
<p> Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="date" name="bdate" required></br>
 </p>
 <p> Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text"  name="address"required></br>
 </p>
 
 
 <p> Contact  no:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="contact"required></br>
 </p>
 
 
 
  <p>E-Mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="email" name="email" required></br>
 </p>
 
  <p>Create Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="password" name="crpassword" required></br>
 </p>
 
   <p>conferm Password:&nbsp;&nbsp;&nbsp;
 <input type="password" name="copassword" required></br>
 </p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Apply">

</form>


</body>
</html>