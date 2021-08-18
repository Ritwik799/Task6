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
function unique_array($my_name,$key){
    $result = array();
    $i = 0;
    $key_array = array();
    foreach($my_name as $val){
        if(!in_array($val[$key],$key_array)){
            $key_array[$i] = $val[$key];
            $result[$i] = $val;
        }
        $i++;
    }
    return $result;
}
$students = array(0=>array("city_id"=>"1", "name"=>"Ritwik", "mobile_num"=>"7992461547"), 1=>array("city_id"=>"2", "name"=>"Shiv", "mobile"=>"9854678549"), 2=>array("city_id"=>"1", "name"=>"Arpita", "mobile"=>"8567459852"),);
print_r(unique_array($students, "city_id"));
?>
    
</body>
</html>