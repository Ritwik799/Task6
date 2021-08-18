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
//to get a sorted array without preserving the keys.
$my_array = array("ritwik", "shiv", "ritul", "arpita", "ritwik", "shiv");
$sorted_unique_array = array_values(array_unique($my_array));
print_r($sorted_unique_array);
?>
</body>
</html>