<?php 

//function

 function sayHello($name = 'User', $time = 'morning'){
    echo "good $time, $name";
 }

sayHello('evening');

function formatProduct($product){
    //echo "{$product['name']} costs $ {$product['price']} to buy </br>";

    return "{$product['name']} costs $ {$product['price']} to buy </br>";
};


// $products = [
// ['name'=>'Man','price'=> 25],
// ['name'=>'Dan','price'=> 28],
// ['name'=>'hann','price'=> 27],
// ['name'=>'can','price'=> 30],
// ];

// $formatted = formatProduct(['name'=>'Dan','price'=> 28]);

// echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sass.css">
	<title>Php functions</title>
</head>
<body>

</body>
</html>
