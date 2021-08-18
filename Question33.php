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
function arraysearch($arr1,$search){
    reset($arr1);
    foreach($arr1 as $key => $value){
        if(preg_match("/$search/i", $value)){
            echo $search." has found in ".$key."\n";
        }
        else{
            echo $search." has not found in ".$key."\n";
        }
    }
}
$exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math");
arraysearch($exercises,"Math");
?>
</body>
</html>