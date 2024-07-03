<?php
include 'connection.php'; ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    
</head>
<body>
    <div class="container">
        <h1>User Management</h1>
        <form  class="form" method="POST">
            <input type="text" name="name" placeholder="Username" required>
			<input type="email" name="email" placeholder="Email ID" required>
            <input type="text" name="contact" pattern="\d{10}" placeholder="Phone number" required>
            <input type="submit" name="add_user" value="save">
			<button><a href="view.php">view</a></button>
        </form>
		
		
		<script>
		
		const formE1 = document.querySelector('.form');
		formE1.addEventListener('submit', event => {
			event.preventDefault();
			
			const formData= new FormData(formE1);
			const data=Object.fromEntries(formData);
			
			fetch('https://reqres.in/api/users',{
				method:'POST' , 
				headers: {
					'Content-Type':'application/json'
				},
				body:JSON.stringify(data)
			}).then(res => res.json())
			.then(data => console.log(data))
			.catch(error => console.log(error));
		});
		
		</script>
		
		
		
		
	</div>
	<?php
	if(isset($_POST['add_user'])){
		$username=$_POST['name'];
		$email=$_POST['email'];
		$pnumber=$_POST['contact'];
		
		$query="INSERT INTO users (Username,Email,Phone) VALUES ('$username','$email','$pnumber' )";
		
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
