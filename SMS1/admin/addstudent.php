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
		
		
		include('titlehead.php');
		?>
		<form method="post" action="addstudent.php" >
		<table align="center" border="1" style="width:70%; margin_top:40px;">
		<tr>
			<th>Rollno</th>
			<td><input type="text" name="rollno" placeholder="enter rollno" required></td>
			</tr>
			<tr>
			<th>name</th>
			<td><input type="text" name="name" placeholder="enter name" required></td>
			</tr>
			<tr>
			<th>city</th>
			<td><input type="text" name="city" placeholder="enter city" required></td>
			</tr>
			<tr>
			<th>standered</th>
			<td><input type="number" name="std" placeholder="enter standered" required></td>
			</tr>
			
			<tr>
			<td colspan="2"><input type="submit" name="submit" value="submit"></td>
			</tr>
			</table>
			</form>
			</body>
			</html>
			<?php
			if(isset($_POST['submit']))
			{
				include('../dbcon.php');
				$rollno= $_POST['rollno'];
				$name=$_POST['name'];
				$city=$_POST['city'];
				$std=$_POST['std'];
				$query="INSERT INTO student(`id`, `rollno`, `name`, `city`,`standered`) VALUES (NULL,'$rollno','$name','$city','standered')";
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