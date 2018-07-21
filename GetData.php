<?php
include("DBcon.php");
$user_query=mysql_query("select * from user ") or die(mysql_error());
while($row=mysql_fetch_array ($user_query)){
	$id=$row ['userid'];
	$sname=$row['username'];

echo "ID: ",$id,"</br>","Name:",$sname;
}
?>