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
function shuffle_assoc($my_array){
    $keys = array_keys($my_array);
    shuffle($keys);
    foreach($keys as $key){
        $new[$key] = $my_array[$key];

    }
    $my_array = $new;
    return $my_array;

}
$colors = array("color1"=>"White", "color2"=>"Grey", "color3"=>"Blue");
print_r(shuffle_assoc($colors));
?>
    
</body>
</html>