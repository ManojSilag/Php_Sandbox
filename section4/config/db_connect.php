<?php 
//connect to databse

  $conn = mysqli_connect('localhost','manoj','12345','manoj_pizza');

  //check the connection
  if(!$conn){
  	echo "connection error" . mysql_connect_error();
  }

 ?>