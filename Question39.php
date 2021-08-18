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
//to remove duplicate values from an array which contains only strings or only integers
$colors = array(0=>"Grey", 1=>"Blue", 2=>"Grey", 3=>"Yellow", 4=>"Blue");
$numbers = array(0=>200, 1=>500, 2=>200, 3=>-100, 4=>-50, 5=>0);
$uniq_colors = array_keys(array_flip($colors));
$uniq_numbers = array_keys(array_flip($numbers));
print_r($uniq_colors);
print_r($uniq_numbers);


?>
    
</body>
</html>