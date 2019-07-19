<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Student Management System</title>
	</head>
	<body>
	
	<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin login</a></h3>
	<h3 align="right" style="margin-right:20px;"><a href="userregister.php">register</a></h3>
	<h1 align="center">Welcome to student management system</h1>
	<form method="post" action="index.php">
	<table style="width:30%;" align="center" border="1">
		<tr>
			<td colspan ="2" align="center" bgcolor="orange">Student Informatiom</td>
			</tr>
		<tr>
			<td align="left">Choose Standared</td>
			<td>
				<select name ="std" required>
					<option value="1">1st</option>
					<option value="1">2nd</option>
					<option value="1">3rd</option>
					<option value="1">4th</option>
					<option value="1">5th</option>
					</select>
			</td>
			</tr>
			<tr>
				<td align="left">enter rollno</td>
				<td><input type="text" name="rollno" required> </td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="show info"></td>
				</tr>
	</table>
	</body>
	</html>
