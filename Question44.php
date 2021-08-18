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
//to remove a specified duplicate entry from an array 
function array_uniq($my_array, $value){
    $count = 0;
    foreach($my_array as $array_key => $array_value){
        if(($count>0) && ($array_value == $value)){
            unset($my_array[$array_key]);
        }
        if($array_value == $value) $count++;
    }
    return array_filter($my_array);

}
$numbers = array(4, 5, 6, 7, 4, 7, 8);
print_r(array_uniq($numbers, 7));

?>
    
</body>
</html>