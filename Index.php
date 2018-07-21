
<html>

<head>
<style>
@media screen and (max-width:786px){
	table {
    
    width: 150%;
   
	
}
body{
	width:150px;
	
}
}
</style>
<title>Login Page</title>
</head>
<body >

   <!--------------------Login Page------------------->
   
   
   
<table style="  margin-top: 100px;" border="5" bordercolor="#ff0000" width=450 height=300 align="center" ><td> 




<form style=" margin-left: 40px; "action="login.php" method="POST">


<p> Id No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="text" name="id" ></br>
 </p>

  <p>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="password" name="password" ></br>
 </p>
 
 
  <p>Role:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
	<select name="role">
    <option value="Student"> Student</option>
    <option value="Teacher"> Teacher</option>
	<option value="Administator">Administator</option>
	<option value="Office assistant"> Office assistant</option>
	
	</select></br>
	
</p>
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">

</form>

</td></table>
</body>
</html>