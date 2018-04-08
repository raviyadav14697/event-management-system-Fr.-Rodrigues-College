<?php
   $connection_mysql = mysqli_connect("localhost","root","","halloffame") or die("couldn't connect to the server");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $sql = "SELECT username,password FROM adminlogin";
   $result = mysqli_query($connection_mysql,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_NUM);
   
   echo $row[0];
   echo "\n";
   echo $row[1];
   
   
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   print $row["username"];
   print "\n";
   print $row["password"];
   
   mysqli_free_result($result);
   mysqli_close($connection_mysql);
?>