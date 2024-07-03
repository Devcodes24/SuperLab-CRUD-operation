<?php 
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM users WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data) {
	?>
	<a href="index.php" >Main Page</a>
	<script >
	alert("Data deleted successfully")
	window.open('http://localhost/SuperLab/view.php', '_self');

	</script>
	
	<?php
}
else{
	?>
	<script>
	alert("Please try again");
	</script><?php
}
?>