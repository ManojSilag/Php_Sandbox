<?php 
//multi-dimensional arrays

$blogs = [
 ['title'=>'Mario party', 'author'=>'Mario', 'content'=>'lorem', 'likes'=>30],
 ['title'=>'Mario card cheats',  'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
 ['title'=>'Zels hidden chests',  'author'=>'link', 'content'=>'lorem', 'likes'=>50]
];

//print_r($blogs);
//print_r($blogs[1])
//print_r($blogs[1][1]);

//echo $blogs[1]['likes'];
//echo count($blogs)

$blogs[] = ['title'=>'castle party', 'author'=>'manoj', 'content'=>'lorem', 'likes'=>60];
//print_r($blogs);

//remove element from array
$popped = array_pop($blogs);

print_r($popped);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sass.css">
	<title>Php Arrays-multidimensional</title>
</head>
<body>
    

</body>
</html>
