<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php Function example</title>
</head>
<body>

<?php
const BR= "<br/>";

function multiply($one ,$two){
    echo $one * $two;
}

multiply(4,9);
echo BR;

    function add($arg1,$arg2){
        return $arg1+$arg2;
    }
     echo add(2,3);

?>

    
</body>
</html>