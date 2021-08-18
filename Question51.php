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
// to filter out some array elements with certainkey-names
$first_array = array("c1"=>"India", "c2"=>"Spain", "c3"=>"Russia", "c4"=>"Japan");
$second_array = array("c2", "c3");
$result = array_diff_key($first_array, array_flip($second_array));
print_r($result);
?>
    
</body>
</html>