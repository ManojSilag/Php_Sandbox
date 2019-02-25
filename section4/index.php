<?php 


// MySQLi or PDO
//MySqli
//connect to databse

  $conn = mysqli_connect('localhost','manoj','12345','manoj_pizza');

  //check the connection
  if(!$conn){
  	echo "connection error" . mysql_connect_error();
  }

//Getting data from a Database

  //Write query for all pizzas
  // $sql = 'SELECT * FROM pizzas'; // *  is used to select all column

  $sql = 'SELECT title , intgredients,id FROM pizzas';

  //make query and get result
  $result = mysqli_query($conn, $sql);

  //fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free the memory for result variable
  mysqli_free_result($result);

  //close connection
  mysqli_close($conn);
  
  print_r($pizzas);



 ?>

 <!DOCTYPE html>
 <html>
  
 <?php include('templates/header.php') ?>

 <?php include('templates/footer.php') ?>


 </html>
