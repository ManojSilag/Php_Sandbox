<?php 


// MySQLi or PDO
//MySqli
//connect to databse

  $conn = mysqli_connect('localhost','manoj','12345','manoj_pizza');

  //check the connection
  if(!$conn){
  	echo "connection error" . mysql_connect_error();
  }

 ?>

 <!DOCTYPE html>
 <html>
  
 <?php include('templates/header.php') ?>

 <?php include('templates/footer.php') ?>


 </html>
