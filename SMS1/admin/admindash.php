<?php
session_start();
		
		if(isset($_SESSION['uid']))
		{
			echo "";
		}
		else
		{
         header('location:../login.php');
		 }
	?>
	 <?php
		include('header.php');
		?>
	 
	 
	 
	<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title> </title>
	</head>
	<body>
	<div class="admintitle" align="center">
		<h1>Welcome to admin dashboard</h1>
		<h4><a href="logout.php" style="float:right; margin-right:30px; color:black; font-size:20px;">logout</a></h4>
		</div>
	<div class="dashboard">
	<table  style="width:50%;" align="center">
	<tr>
		<td>1.</td><td><a href="addstudent.php">insert student detail</a></td>
		</tr>
		<tr>
		<td>2.</td><td><a href="update.php">update student detail</a></td>
		</tr>
		
	
	</div>
	</body>
	</html>