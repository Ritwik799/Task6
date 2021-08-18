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
//to find unique values from multidimensional arrays and flatten them in 0 depth
function array_flat($my_array){
    $fa = array();
    $l = 0;
    foreach($my_array as $key => $val){
        if( !is_array($val)){
            $fa[] = $val;
            continue;
        }
        $l++;
        $fa = array_flat($val,$fa,$l);
        $l--;
    }
    if($l == 0) $fa = array_values(array_unique($fa));
    return $fa;
}
$tmp = array("a"=> array(-10,-8,10,20,30), "b"=> array("c"=> array(-10,-8,20,10,30)));
print_r(array_flat($tmp));
?>
    
</body>
</html>