<?php 

   // print_r($_GET);
  // if(isset($_GET['submit'])){
  // 	echo $_GET['email'];
  // 	echo $_GET['title'];
  // 	echo $_GET['intgredients'];
  // }

  if(isset($_POST['submit'])){
  	echo $_POST['email'];
  	echo $_POST['title'];
  	echo $_POST['intgredients'];
  }

 ?>

 <!DOCTYPE html>
 <html>
  
 <?php include('templates/header.php') ?>

<section class="container grey-text">
	<h4 class="center">Add a Pizza</h4>
	<form class="white" action="add.php" method="POST">
		<label>Your Email:</label>
		<input type="text" name="email">
		<label>Pizza title</label>
		<input type="text" name="title">
		<label>Intgredients (comma separated):</label>
		<input type="text" name="intgredients">
		<div class="center">
		  <input type="submit" name="submit" value="submit" class="btn brand ">
		</div>
	</form>
</section>

 <?php include('templates/footer.php') ?>


 </html>