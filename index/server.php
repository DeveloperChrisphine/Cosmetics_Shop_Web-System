<?php 
	session_start();
	// variable declaration
	// connect to database
	$db = mysqli_connect("localhost","root","","cosmeticsshop") or die("can't connect database");
  	mysqli_set_charset($db,"utf8");

?>