
    


<?php
	
	require('Textlocal.class.php');

 	$con=mysqli_connect("localhost","root","","evm") or die("couldn't to the  server");

	$Textlocal = new Textlocal(false, false, 'V8z7fwiKVrk-0RYLLvpWbZtne3wlqftei6Xwp55j7n');
	$cid = 3;
 	$q = "select * from council where cid ='".$cid."'";
 	$res = mysqli_query($con, $q);
 	//echo $res;
 	$mobile = array();
 	while($row = $res->fetch_assoc())
	{
	  	array_push($mobile, $row['contact']);
	  	echo $row['contact'];
	}
	//echo 'mobile';
	$numbers = $mobile;
	$sender = 'TXTLCL';
	$message = 'This is your message';
 
	$response = $Textlocal->sendSms($numbers, $message, $sender);
	//print_r($response);
?>