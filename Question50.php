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
// to get the last value of an array without affecting the pointer
$colors = array("Grey", "Black", "Red", "Orange");
echo next($colors). "\n";
$last = array_pop(array_keys(array_flip($colors)));
echo $last. "\n";
echo current($colors). "\n";
?>
    
</body>
</html>