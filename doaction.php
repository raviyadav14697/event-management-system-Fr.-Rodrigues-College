<?php
	



require("db.php");	

if(mysqli_query($con,"DELETE * FROM temporary_table")){
	header('Location:automate.php');
}






?>