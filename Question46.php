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
//to check whether all array values are strings or not
function check_strings_in_array($arr){
    return array_sum(array_map("is_string", $arr)) == count($arr);
}
$arr1 = array("JAVA", "PHP", "HTML");
$arr2 = array("SQL", 100, "css");
var_dump(check_strings_in_array($arr1));
var_dump(check_strings_in_array($arr2));
?>
    
</body>
</html>