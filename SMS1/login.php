<?php
session_start();
		
		if(isset($_SESSION['uid']))
		{
			echo $_SESSION['uid'];
		}
         header('location:admin/admindash.php');
	?>

<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title> Admin Login</title>
	</head>
	<body>
		<h1 align="center" >admin login</h1>
		<form action="login.php" method="post">
		
		<table align="center">
			<tr>
				<td bgcolor="orange">Username</td><td><input type ="text" name="uname" required</td>
				</tr>
			<tr>
				<td bgcolor="orange">Password</td><td><input type ="password" name="password" required</td>
				</tr>
			<tr>
			<td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
	</tr>
	</table>
	</form>
	</body>
	</html>
	<?php
	
	include('dbcon.php');
	
	if(isset($_POST['login']))
	{
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$query="SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
	$run=mysqli_query($con,$query);
	$count = mysqli_num_rows($run);
	if ($count < 1)
	{
		?>
		<script>
		alert ('Username or Password not match!!');
		window.open ('login.php','_self');
	</script>
	<?php
	}
	else 
	{
		$data=mysqli_fetch_assoc($run);
        $id=$data['id'];
		
		
		$_SESSION['uid']=$id;
		
		
		
	}
	}
	
	?>
	
