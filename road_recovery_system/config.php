<?php


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="road_recovery_system"; // Database name 


//Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 
//mysql_select_db("$db_name")or die("cannot select DB");

$conn = mysqli_connect($host,$username,$password,$db_name);

if(!$conn)
{
	die("unable to connect ".mysqli_error($conn));
}


?>