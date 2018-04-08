<?php

	session_start();
	require 'db.php';
	//$cur_council = $_SESSION['councilid'];
	$cur_council = 2;
	$type = 0;
	$q = "insert into temporary_table(event_name, committee_name, date, timing, studentid, capacity, type) values('".$_POST['event_name']."','".$_POST['committee_name']."','".$_POST['date']."','".$_POST['timing']."','".$cur_council."','".$_POST['capacity']."','".$type."')";
	
	//$q = "insert into temporary_table(event_name, committee_name) values('".$_POST['event_name']."','".$_POST['committee_name']."')";
	
	$res = mysqli_query($con, $q);
	//echo $res;
	if(!res)
		echo "Not inserted";
	else
		echo "inserted successfully!";

?>