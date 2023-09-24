<?php 
	include "connection.php";
?>

<?php
	$data=mysqli_query($conn,"SELECT * FROM movie"); 
	//echo $data;
?>

<table border="5px" bordercolor="red" width="80%" cellspacing="10" align="center">
	
		<tr>
			<th>u_id</th>
			<th>u_fname</th>
			<th>u_lname</th>
			<th>u_email</th>
			<th>u_pass</th>
			<th>u_conpass</th>
			<th>u_mobile</th>
			<th>u_address</th>
			<th colspan="2">Action</th>
		</tr>

    <?php 
		
		while($row = mysqli_fetch_array($data))
		{ 
	?>
	<tr>
		<td><?php echo $row['u_id']; ?></td>
		<td><?php echo $row['u_fname']; ?></td>
		<td><?php echo $row['u_lname']; ?></td>
		<td><?php echo $row['u_email']; ?></td>
		<td><?php echo $row['u_pass']; ?></td>
		<td><?php echo $row['u_conpass']; ?></td>
		<td><?php echo $row['u_mobile']; ?></td>
		<td><?php echo $row['u_address']; ?></td>

		<td><a href="edit.php?edit_id=<?php echo $row['u_id']; ?>" onclick="return confirm('Are You Sure To Update ?')">Update</a></td>

		<td><a href="delete.php?del=<?php echo $row['u_id']; ?>" onclick="return confirm('Are You Sure To Delete ?')">Delete</a></td>

	</tr>
<?php 
		
	}
?>
<table>


<?php //////Error Showing in emp_contact ..... ?>