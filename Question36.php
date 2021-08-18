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
// php script to lower-case and upper-caase all elements in an array.
$colors = array("Blue", "Yellow", "Brown", "Grey");
print_r($colors);
echo "<br>";

$lower_colors = array_map("strtolower", $colors);
print_r($lower_colors);
echo "<br>";
$upper_colors = array_map("strtoupper", $colors);
print_r($upper_colors);
echo "<br>";

?>
    
</body>
</html>