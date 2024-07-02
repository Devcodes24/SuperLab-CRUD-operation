<?php 
include 'connection.php'
$id=$_GET['id'];
$query="DELETE FROM Party_plan WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data) {
	?>
	<script >
	alert("Data deleted successfully")</script>
	
	<?php
}
else{
	?>
	<script>
	alert("Please try again");
	</script>
}
