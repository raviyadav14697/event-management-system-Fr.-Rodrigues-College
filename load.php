		<?php 
//rejection
if(isset($_GET['reject'])){
	
require("db.php");	
$or=$_GET['reject'];

if(mysqli_query($con,"DELETE FROM temporary_table WHERE event_no='$or'")){
	header('Location:admin_index.php');
}	
else{
echo ("<div class='ui negative message' style='margin:auto'>Error! Could not process rejection request for Order #$or ! </div>");	
}	
}