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
// to get an array with the first key and value
function array_1st_element($my_array){
    list($k) = array_keys($my_array);
    $result = array($k => $my_array[$k]);
    unset($my_array[$k]);
    return $result;
}
$colors = array("c1"=>"Ritwik", "c2"=>"Shiv", "c3"=>"Pinto");
print_r(array_1st_element($colors));
?>
    
</body>
</html>