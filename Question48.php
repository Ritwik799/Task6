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
// to set the union of two arrays
function array_union($x, $y){
    $aunion = array_merge(array_intersect($x, $y), array_diff($x, $y), array_diff($y, $x));
    return $aunion;

}
$a = array(31, 32, 33, 34);
$b = array(32, 33, 34, 35, 36);
print_r(array_union($a, $b));
?>
    
</body>
</html>