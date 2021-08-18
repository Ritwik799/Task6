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
//to count total number of times a specific value appears in an array
function count_array_values($my_array,$match){
    $count = 0;
    foreach($my_array as $key => $value)
    {
        if($value == $match){
            $count++;
        }
    }
    return $count;
}
$colors = array("c1"=>"Grey", "c2"=>"Blue", "c3"=>"Yellow", "c4"=>"Grey");
echo "\n"."Grey color appears : ".count_array_values($colors,"Grey"). "time(s)."."\n";

?>
    
</body>
</html>