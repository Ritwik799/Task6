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
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
    $pass_order = Array();
    $passWord = " ";

    //Create contents of the password
    for($i=0;$i<$upper;$i++){
        $pass_order[] = chr(rand(65,90));
    }
    for($i=0;$i<$lower;$i++){
        $pass_order[] = chr(rand(97,122));
    }
    for($i=0;$i<$numeric;$i++){
        $pass_order[] = chr(rand(48,57));
    }
    for($i=0;$i<$other;$i++){
        $pass_order[] = chr(rand(33,47));
    }

    //using shuffle() to shuffle the order
    shuffle($pass_order);

    //final password string
    foreach($pass_order as $char){
        $passWord .= $char;
    }
    return $passWord;

}
echo "\n" . "Generated Password : ".rand_Pass(). "\n";
?>
    
</body>
</html>