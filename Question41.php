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
//to identify the email addresses which are not unique
function array_not_unique($my_array){
    $same = array();
    natcasesort($my_array);
    reset ($my_array);

    $old_key = NULL;
    $old_value = NULL;
    foreach($my_array as $key => $value){
        if($value === NULL){ 
            continue;
        }
        if($old_value == $value){
            $same[$old_key] = $old_value;
            $same[$key] = $value;

        }
        return $same;
    }
}
$test_array = array();
$test_array[1] = "asds@gmail.com";
$test_array[2] = "ritwik125@gmail.com";
$test_array[3] = "taken@gmail.com";
$test_array[4] = "ritwik125@gmail.com";

print_r(array_not_unique($test_array));

?>
</body>
</html>