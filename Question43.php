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
$list1 = "15, 16, 17, 18";
$list2 = "15, 16, 18, 19";
//combine both lists with unique values only
$result = implode(",", array_unique(array_merge(explode(",", $list1),explode(",", $list2))));
echo $result."\n";
?>
    
</body>
</html>