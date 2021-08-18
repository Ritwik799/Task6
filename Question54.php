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
// to remove all white spaces in an array
$my_array = array(15, null, " ", -2, NULL, "", "\n", "Yellow", 85, "\t");
print_r($my_array);
$result = array_filter($my_array, create_function("$x", "return preg_match("#\S#",$x);"));
print_r($result);
?>
    
</body>
</html>