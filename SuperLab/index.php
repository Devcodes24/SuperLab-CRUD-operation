<?php
include 'connection.php';

// Handle item deletion


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Planner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Party Planner</h1>
        <form action="add_item.php" method="POST">
            <input type="text" name="name" placeholder="Username" required>
			<input type="email" name="email" placeholder="Email ID" required>
            <input type="number" name="contact" size="10" placeholder="Phone number" required>
            <input type="submit" name="add_user" value="save">
			<button><a href="view.php">view</a></button>
        </form>
	</div>
	<?php
	if(isset($_POST['add_user'])){
		$username=$_POST['name'];
		$email=$_POST['email'];
		$pnumber=$_POST['contact'];
		
		$query="INSERT INTO users (
		Username,Email,Phone)" VALUES('$username','$email','$pnumber' )";
		
		$data=mysqli_query($conn,$query);
		if($data){
			?>
			<script>alert("Data saved successfully")</script>
			<?php
		}
		
	}
	
	
	?>

        
</body>
</html>
