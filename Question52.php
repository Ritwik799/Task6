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
function array_filter_by_value($my_array,$index,$value){
    if(is_array($my_array) && count($my_array)>0){
        foreach(array_keys($my_array) as $key){
            $temp[$key] = $my_array[$key][$index];
            if($temp[$key]== $value){
                $new_array[$key] = $my_array[$key];
            }
        }
    }
    return $new_array;
}
$colors = array(0 => array("key1"=>"India", "key2"=>"Spain", "key3"=>"Russia"), 1 => array("key1"=>"Japan", "key2"=>"USA", "key3"=>"China"));
$results = array_filter_by_value($colors, "key2", "USA");
print_r($results);

?>
    
</body>
</html>