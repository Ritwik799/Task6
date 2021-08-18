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
// To sort an associative array(alphanumeric with case-sensitive data) by values
$test_array = array(0=>"ritwik2", 1=>"Ritwik11", 2=>"ritwik10", 3=>"Ritwik5", 4=>"ritwik3", 5=>"RITWIK37", 6=>"ritwik8");
asort($test_array, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
print_r($test_array);
?>
    
</body>
</html>