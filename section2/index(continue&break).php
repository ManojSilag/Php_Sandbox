<?php 

//continue and break

$products = [
['name'=>'Man','price'=> 25],
['name'=>'Dan','price'=> 28],
['name'=>'hann','price'=> 27],
['name'=>'can','price'=> 30],
];


foreach ($products as $product) {
    if($product['name'] === 'hann'){
    break;
    }

    if($product['price'] > '27'){
    continue;
    }

    echo $product['name']. '</br>';
}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sass.css">
	<title>Php continue and break</title>
</head>
<body>

</body>
</html>
