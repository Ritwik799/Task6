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
$colors = array("key1"=>"Ritwik", "key2"=>"Goutam", "key3"=>"Shipra");
$given_value = "Shiv";
print_r($colors);

$new_filtered_array = array_filter($colors, function($element)use($given_value){ return($element != $given_value);});
print_r($given_value);
print_r($new_filtered_array);
?>
</body>
</html>