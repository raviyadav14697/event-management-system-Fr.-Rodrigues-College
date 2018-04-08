<?php
require "db.php";

$n = $_POST['name'];
$p = $_POST['pkg'];
$m = $_POST['ptr'];
$d = $_POST['date'];


	$q = "Insert into pevent(name,date,ptr,pkg) values('".$n."','".$d."','".$m."','".$p."')";

  
  	$res = mysqli_query($con,$q);
   
  	if(!$res)
  	{
  		echo "Error Occured";
  	}
  	else
  	{
  		echo "Inserted Successfully";
  	}


?>