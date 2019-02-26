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

  $sql = 'SELECT title , intgredients, id FROM pizzas ORDER BY created_at';

  //make query and get result
  $result = mysqli_query($conn, $sql);

  //fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free the memory for result variable
  mysqli_free_result($result);

  //close connection
  mysqli_close($conn);
  
  // print_r($pizzas);



 ?>

 <!DOCTYPE html>
 <html>
  
 <?php include('templates/header.php') ?>

 <h4 class=" center grey-text"></h4>

 <div class="container">
 	<div class="row">
 		<?php foreach($pizzas as $pizza){ ?>

 			<div class="col s6 md3">
 				<div class="card z-depth-0">
 					<div class="card-content center">
 						<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
 						<div><?php echo htmlspecialchars($pizza['intgredients']) ?></div>
 					</div>
 					<div class="card-action right-align">
 						<a class="brand-text" href="#">more info</a>
 					</div>
 				</div>
 			</div>


 		<?php } ?>
 	</div>
 </div>


 <?php include('templates/footer.php') ?>


 </html>
