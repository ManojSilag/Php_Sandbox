<?php 

//loops
$ninjas = ['shaun','ryu','yoshi'];

// for ($i=0; $i < count($ninjas); $i++) { 
// 	echo $ninjas[$i] . '<br>';
// }

// foreach ($ninjas as $ninja) {
// echo $ninja . '<br>';
// }

$products = [
["name"=>'star', "price"=>30],
["name"=>'sas', "price"=>35],
["name"=>'sr', "price"=>320],
["name"=>'sar', "price"=>370],
];

// foreach ($products as $product) {
// 	echo $product['name']. '-'.$product['price'].'<br>';
// }

// $i = 0;
// while($i < count($products)){
// 	echo $products[$i]['name'].'<br>';
// 	$i++;
// }

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sass.css">
	<title>Php Arrays-multidimensional</title>
</head>
<body>
    
    <h1>Products</h1>
    <ul>
    	<?php foreach ($products as $product) { ?>
        <h3>
        	<?php echo $product['name']; ?>
        </h3> 
        <p>
        	$ <?php echo $product['price']; ?>
        </p>
    	<?php } ?>
    </ul>


</body>
</html>
