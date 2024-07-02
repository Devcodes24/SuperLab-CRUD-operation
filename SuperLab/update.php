<?php
include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM users WHERE id='$id' ";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>

<div>
<form action="add_item.php" method="POST">
            <input type="text" value="<?php echo $row['Username']?>" name="name" placeholder="Name" required>
            <input type="number" value="<?php echo $row['Email']?>" name="email" placeholder="Email ID" required>
			<input type="number" value="<?php echo $row['Phone']?>" name="contact" placeholder="Phone number" required>
            <input type="submit" name="update_btn" value="Update">
			<button><a href="index.php">Back</a></button>
			
</form></div>

<?php
	if(isset($_POST['update_btn'])){
		$username=$_POST['name'];
		$email=$_POST['email'];
		$pnumber=$_POST['contact'];
		
		$update="UPDATE users SET name='$username', email='$email' , contact='$pnumber' WHERE id='$id'";
		
		$data=mysqli_query($conn,$query);
		if($data){
			?>
			<script>alert("Data Updated successfully")</script>
			<?php
		}
		
	}
	
	
	?>