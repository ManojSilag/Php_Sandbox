<?php 

//variable scope

//local variable

	// function myFunc(){
	// $price = 10;
	// echo $price;
	// }
	// myFunc();

   // function myFuncTwo($age){
   //   echo $age; 
   // }

   // myFuncTwo(12);
   // echo $age;

//global variable   

 $name = 'Mario';

// function sayHello(){
// 	global $name;
// 	$name = 'man';
// 	echo "hello $name";
// }

// sayHello();
// echo $name;

function sayBye(&$name){
	$name = "Amit ";
	echo "bye $name";
}

sayBye($name);
echo $name;
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Php variable scope</title>
 </head>
 <body>
    
 </body>
 </html>
