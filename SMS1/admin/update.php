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
<table align="center">

<form action ="updatestudents.php" method="post">
<tr>
	<th>Enter standered</th>
	<td><input type="number" name="standered" placeholder="enter standered" required="required"/></td>
	</tr>
	<tr>
	<th>enter student name </th>
	<td><input type="text" name="stuname" placeholder="enter student name" required="required"/></td>
	
	<td colspan="2"><input type="submit" name="submit" value="search"/></td>
	</tr>
		

</form>
</table>
<table  align="center" width="80%" border="1" sytle="margin-top:10px;">
	<tr>
		<th>rollno</th>
		<th>name</th>
		<th>edit</th>
		</tr>
		<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$standered=$_POST['standered'];
		$name=$_POST['stuname'];
		$sql="SELECT * FROM `student` WHERE 'standered'=' $standered' AND 'name' LIKE '%name%'";
		$run=mysqli_query($con.$sql);
		if(mysqli_num_rows($run)<1)
		{
				echo "<tr><td colspan='5'>no records found</td></tr>";
	    }
	else{
		$count=0;
		
		while($data=mysqli_fetch_assoc($run))
		{
			?>
		<tr>
		<td><?php echo $count;?></td>
		<td><?php echo $data['name'];?></td>
		<td><?php echo $data['rollno'];?></td>
		<td>edit</td>
		</tr>
			
			<?php
		}
	    }
	}
?>
		</table>
