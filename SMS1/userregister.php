
<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>register</title>
	</head>
	<body>
		<h1 align="center" >register</h1>
		<form action="userregister.php" method="post">
		
		<table align="center">
			<tr>
				<td bgcolor="orange">Username</td><td><input type ="text" name="uname" required</td>
				</tr>
				<tr>
				<td bgcolor="orange">email</td><td><input type ="email_id" name="email_id" required</td>
				</tr>
			<tr>
				<td bgcolor="orange">create new Password</td><td><input type ="password" name="password" required</td>
				</tr>
				
			<tr>
			<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
	</tr>
	</table>
	</form>
	</body>
	<?php
	
	include('dbcon.php');
	
	if(isset($_POST['register']))
	{
	$username=$_POST['uname'];
	$email=$_POST['email_id'];
	$password=$_POST['password'];
	$query="INSERT INTO `register`(`id`, `username`, `email`, `password`)VALUES (NULL,'$username','$email','$password')";
	$run=mysqli_query($con,$query);
	$count = mysqli_num_rows($run);
	
					$run=mysqli_query($con,$query);
				if($run == true)
				{
					?>
					<script>
						alert('Data Inserted successfully.');
					</script>
					<?php
				}
			
			}
			
			?>
	
	
	