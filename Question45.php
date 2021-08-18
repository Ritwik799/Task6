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
//to do multi-dimensional difference, i.e returns values of the first array that are not in the second array

$color1 = array( array("Grey", 50), array("Yellow", 90), array("Brown", 60));
$color2 = array( array("Yellow", 90), array("White", 95));
$color = array_udiff($color1,$color2,create_function("$a,$b", "return strcmp( implode( $a) implode( $b));"));
print_r($color);
?>
</body>
</html>