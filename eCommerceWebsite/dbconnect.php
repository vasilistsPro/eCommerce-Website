<?php 
	
	$host='localhost';
	$username='eshop';
	$pass='123456789';
	$db='mydb';

	$conn=mysqli_connect($host,$username,$pass,$db);

	if(!$conn) die("Connection refused").mysql_connect_error();
 ?>