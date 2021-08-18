<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//to get the index of the highest value in an associative array
$x = array("value1"=>4555, "value2"=>2520, "value3"=>4296, "value4"=>5887, "value5"=>4456);
reset($x);   //optional
arsort($x);
$key_of_max = key($x);
echo "Index of the highest value : " .$key_of_max. "\n";
?>
    
</body>
</html>