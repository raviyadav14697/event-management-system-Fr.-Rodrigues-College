<?php
require "db.php";

  $ptr = $_POST['ptr'];

	$q = "Select * from student where CGPA>".$ptr;
 
  $res = mysqli_query($con,$q);


      if(mysqli_num_rows($res)==0)
        {
          echo "No one eligible";
        }
        else
        {
          echo "<div class=\"container\" id = \"moc\"style=\" margin-top='30px'\"><div class=\"page-header\"><h1>List of eligible students</h1></div></div><div class=\"container table-striped table-responsive\">";
          echo "<table class=\"table\">";
          echo "<thead><th>COLLEGE ID</th><th>NAME</th><th>CGPA</th></thead><tbody>";
          while($row = $res->fetch_array())
          {
            $name = $row['Name'];
            $id = $row['ID'];
            $cgpa = $row['CGPA'];
            echo "<tr><td>".$id."</td><td>".$name."</td><td>".$cgpa."</td></tr>";
          }
        }
        echo "</tbody></table></div>";
  
?>
