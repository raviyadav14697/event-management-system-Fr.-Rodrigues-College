<?php

	// Create connection
   $conn = new mysqli("localhost","root","","evm");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM temporary_table where type = 0";
$result = $conn->query($sql);
?>
<div class="container">
  <h2>Confirmed Event List</h2>
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Event Name</th>
        <th>Commitee Name</th>
        <th>Date</th>
        <th>Timing</th>
        <th>Capacity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  
<?php 	  

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		?>
		
		<td> <?php echo $row["event_no"] ?></td>
        <td><?php echo $row["event_name"] ?></td>
        <td><?php echo $row["committee_name"] ?></td>
		<td><?php echo $row["date"] ?></td>
        <td><?php echo $row["timing"] ?></td>
		<td><?php echo $row["capacity"] ?></td>
		
		   
</tr>
   <?php
 }
}
 else {
    echo "0 results";
}

?>

    </tbody>
  </table>
  </div>
</div>


