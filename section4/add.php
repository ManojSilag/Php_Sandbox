<?php 

  // print_r($_GET);
  // if(isset($_GET['submit'])){
  // 	echo $_GET['email'];
  // 	echo $_GET['title'];
  // 	echo $_GET['intgredients'];
  // }

include('config/db_connect.php');

$errors= array('email'=>'', 'title'=>'', 'intgredients'=>'');

   $email = $title = $intgredients ='';

  if(isset($_POST['submit'])){
  	// echo htmlspecialchars($_POST['email']);
  	// echo htmlspecialchars($_POST['title']);
  	// echo htmlspecialchars($_POST['intgredients']);

  	//check email
  	if(empty($_POST['email'])){
  		 $errors['email'] =  "An email is required <br>";
  	}else{
  		$email =  $_POST['email'];
  		//echo htmlspecialchars($_POST['email']);
  		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){   $errors['email'] = 'email must be a valid email address';
  		}
  	}


  	//check title
  	if(empty($_POST['title'])){
  		$errors['title'] = "An title is required <br>";
  	}else{
  		$title = $_POST['title'];
  		//echo htmlspecialchars($_POST['title']);
  		if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
  			$errors['title'] = 'Title must be letter and spaces only';
  		}
  	}


  	// check ingredients
	if(empty($_POST['intgredients'])){
		$errors['intgredients'] = 'At least one ingredient is required <br />';
	} else{
		$intgredients = $_POST['intgredients'];
		if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $intgredients)){
			$errors['intgredients'] ='Ingredients must be a comma separated list';
		}
	}

     if(array_filter($errors)){
     	//echo 'errors in the form';
     } else{

        //protecting server from sqlinjection
     	$email = mysqli_real_escape_string($conn,  $_POST['email'] );
     	$title = mysqli_real_escape_string($conn,  $_POST['title'] );
     	$intgredients = mysqli_real_escape_string($conn,  $_POST['intgredients'] );
           

           //create sql
     	  $sql = "INSERT INTO pizzas(title,email,intgredients) VALUES ('$title', '$email', '$intgredients')";

     	  //save to db and check
     	  if(mysqli_query($conn, $sql)){
     	  	// success
     	  	header('Location: index.php');
     	 
     	  }else{
     	  	//error
     	  	echo 'query error: ' . mysqli_error($conn);
     	  }



     	//echo "form is valid";
     	header('Location: index.php');

     }

  } //end of post check





 ?>

 <!DOCTYPE html>
 <html>
  
 <?php include('templates/header.php') ?>

<section class="container grey-text">
	<h4 class="center">Add a Pizza</h4>
	<form class="white" action="add.php" method="POST">
		<label>Your Email:</label>
		<input type="email" name="email" value="<?php echo htmlspecialchars($email) ?>">
		<div class="red-text"><?php echo $errors['email']; ?></div>
		<label>Pizza title</label>
		<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
		<div class="red-text"><?php echo $errors['title']; ?></div>
		<label>Intgredients (comma separated):</label>
		<input type="text" name="intgredients" value="<?php echo htmlspecialchars($intgredients) ?>">
		<div class="red-text"><?php echo $errors['intgredients']; ?></div>
		<div class="center">
		  <input type="submit" name="submit" value="submit" class="btn brand ">
		</div>
	</form>
</section>

 <?php include('templates/footer.php') ?>


 </html>
