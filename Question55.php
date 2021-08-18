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
$string = "My name is Ritwik Chatterjee. I belong from Sindri, and currently I am persuaing my btech from REC. I worked on a project named rentz4u , and now I work for Caladig solutions as a software developer.";
$result = array_filter(array_map("trim", explode("\n", $string)), "strlen");
print_r($result);
?>
    
</body>
</html>