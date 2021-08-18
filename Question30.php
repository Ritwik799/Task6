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
function letter_range($length){
    $data_range = array();
    $letters = range("A", "Z");
    for($i=0;$i<$length;$i++){
        $position = $i*26;
        foreach($letters as $ii => $letter){
            $position++;
            if($position<=$length)
            $data_range[] = ($position>26?$data_range[$i-1] : '').$letter;

        }
    }
    return $data_range;
}
print_r(letter_range(7));
?>
    
</body>
</html>