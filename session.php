<?php

   include('DBcon.php');
     if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

   
   $id_check = $_SESSION['login_user'];
   $role_check = $_SESSION['login_role'];
 
   
   $ses_sql = mysqli_query($con,"select id,role,password from signup where id = '$id_check' "); 
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
   $login_role=$row['role'];
   $login_password=$row['password'];
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>