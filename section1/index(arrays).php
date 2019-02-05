<?php 

//indexed arrays
      $peopleOne = ['Manoj','Crystal', 'Ryu'];
      //echo $peopleOne[0];

      $peopleTwo = array('Manoj','crystal', 'Ryu');
      //echo $peopleTwo[2];

      $ages = [20,30,40];
      //Print_r used to print array whears echo is used to give output the data on screen.
      //print_r($ages);

      //changing value
      $ages[1] = 25;
      //print_r($ages)

      //adding value
      $ages[] = 50;
      //print_r($ages);

      array_push($ages,60);
      //print_r($ages);

      //count elements
      //echo count($ages);

      //merge two arrays
      $peopleThree = array_merge($peopleOne,$peopleTwo);
      //print_r($peopleThree);

//associative arrays (key and value pairs)

      $ninjasOne = ['Manoj'=>'Silag', 'Mario'=> 'Orange', 'luigi'=>'Brown'];

      //echo $ninjasOne['Manoj'];
      //print_r($ninjasOne);

      $ninjasTwo = array('browser'=> 'green', 'peach'=>'yoo');
      //print_r($ninjasTwo)

      //adding element with key
      $ninjasTwo['toda'] = 'pink';
      //print_r($ninjasTwo);

      //changing elemnet
      $ninjasTwo['browser'] = 'black';
      //print_r($ninjasTwo);

      //count elements
      //echo count($ninjasOne);

      //merge two arrays
      $ninjaThree = array_merge($ninjasOne, $ninjasTwo);
      print_r($ninjaThree);

 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sass.css">
	<title>Php Arrays</title>
</head>
<body>
    

</body>
</html>
