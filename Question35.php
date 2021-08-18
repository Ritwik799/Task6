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
// to trim all the elements in an array using array_walk function
$arr = array(1=>"Grey", "Yellow", "Brown", "Orange");
echo "Original array:\n";
foreach($arr as $key => $value){
print_r($arr[$key]."\n");
}
array_walk($arr, create_function('&$val', '$val = trim($val);'));
echo "\nModified array:\n";
foreach($arr as $key => $value){
    print_r($arr[$key]."\n");
}
?>
    
</body>
</html>