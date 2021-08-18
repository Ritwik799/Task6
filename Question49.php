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
// to get an array containing all the entries of an array containing all the entries of an array which have the keys thay are present in another array
$first_array = array("c1"=> "India", "c2"=>"Spain", "c3"=>"Russia", "c4"=>"Japan");
$second_array = array("c1" , "c4");
print_r(array_intersect_key($first_array, array_flip($second_array)));
?>
    
</body>
</html>