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
function file_extension($str1){
    $str1 = implode("",explode("\\",$str1));
    $str1 = explode(".",$str1);
    $str1 = strtolower(end($str1));
    return $str1;

}

$file = "youtube.com";
echo "\n".file_extension($file)."\n";
?>
    
</body>
</html>