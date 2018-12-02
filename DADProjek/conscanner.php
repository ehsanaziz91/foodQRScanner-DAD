<?php

$db_name="projekdad";
$mysql_username="root";
$mysql_password="";
$server_name="localhost";
$conn=new mysqli($server_name,$mysql_username,$mysql_password,$db_name);

if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

?>