<?php include 'connection.php';?>
<a href="index.php" >Main Page</a>
<table border="1px" cellpadding="10px" cellspacing="0">
<tr>
<th>Username</th>
<th>Email</th>
<th>Phone number</th>
<th colspan="2">Actions</th>
</tr>

<?php 
$query="SELECT * FROM users";
$data=mysqli_query($conn,$query);
$result=mysqli_num_rows($data);
if($result){
	while($row=mysqli_fetch_array($data)){
		?>
		<tr>
		<td><?php echo $row['Username']></td>
		<td><?php echo $row['Email']></td>
		<td><?php echo $row['Phone']></td>
		<td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>"></a></td>
		</tr>
	}
}
else{
	?>
	<tr>
	<td>No records</td>
	</tr>
}

?>
</table>