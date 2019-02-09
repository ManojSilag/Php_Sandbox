<?php 

//conditonal statments

// $price = 10;
// if ($price < 30){
// 	echo "true";
// }elseif ($price < 20) {
// 	echo "elseif true";
// }else {
// 	echo "false";
// };

$products = [
['name'=>'Man','price'=> 25],
['name'=>'Dan','price'=> 28],
['name'=>'hann','price'=> 27],
['name'=>'can','price'=> 30],
];


foreach ($products as $product) {

// if($product['price'] < 28 && $product['price'] > 25){
// echo $product['name'] . '<br>';
// }

// if($product['price'] < 28 || $product['price'] > 25){
// echo $product['name'] . '<br>';
// }

}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sass.css">
	<title>Php condition statment</title>
</head>
<body>
    <div>
    	<ul>
    		<?php foreach ($products as $product) { ?>
    			<?php if($product['price'] > 27){ ?>
    				<li><?php echo $product['name'] ?></li>
    			<?php } ?>
    		<?php } ?>	
    	</ul>
    </div>

</body>
</html>
