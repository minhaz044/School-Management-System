<?php
include("backtohomepage.php");
include("session.php");
?>


<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
}
li a {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.3s;
    cursor: pointer;
	height:15px;
	width:180px;
	background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}


li a:hover {
     background-color: #4CAF50;
    color: white;
}

</style>








   
  
      <title>Welcome </title>
   </head>
   
   <body >
      <h1 align="center"><?php echo $login_session ; ?></h1>
	  <p align="center" style=" margin-left: 50px;margin-top: -30px;"> <?php echo $login_role ; ?></p>








<?php
if($login_session!=null){
	
	
	
	
	
	
	
switch ($login_role) {

    case "Teacher":
?>		<div align="center">
		<ul >
		
		
		</ul>		
		</div>
		
<?php
        break;
    case "Administator":
?>
		<div align="center">
		<ul >		
		
		
		
		
		</ul>
		</div>
		
<?php
        break;
case "Clark":
?>
		<div align="center">
		<ul >		
		<li><a href=""><span> </span></a></li>

		</ul>			
		</div>
		
		
<?php
        break;    
    default:
?>
        <h1>Welcome <?php echo $login_session ; ?></h1>
	    <h1>Role <?php echo $login_role ; ?></h1>
<?php
} 


}

?>	
	
	
	
	
	
	
	
	
	
	
	



