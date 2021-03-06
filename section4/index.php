<?php 


// MySQLi or PDO
//MySqli
 
  include('config/db_connect.php');

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

  //the explode function
  //print_r(explode(',', $pizzas[0]['intgredients']));



 ?>

 <!DOCTYPE html>
 <html>
  
 <?php include('templates/header.php') ?>

 <h4 class=" center grey-text"></h4>

 <div class="container">
 	<div class="row">
 		<?php foreach($pizzas as $pizza): ?>

 			<div class="col s6 md3">
 				<div class="card z-depth-0">
 					<div class="card-content center">
       <img src="img/img.svg" class="pizza">
 						<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
 						<ul>
 							<?php foreach (explode(',', $pizza['intgredients']) as $ing): ?>
 								<li><?php echo htmlspecialchars($ing); ?></li>

 							<?php endforeach ?>	
 						</ul>
 					</div>
 					<div class="card-action right-align">
 						<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
 					</div>
 				</div>
 			</div>


 		<?php endforeach; ?>
 	</div>
 </div>


 <?php include('templates/footer.php') ?>


 </html>
