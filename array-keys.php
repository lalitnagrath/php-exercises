<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array with keys</title>
</head>
<body>
    <?php
    $phonebook=[
        'police'=>'100',
        'fire'=>'101',
    ];
    echo 'Phone number of police is'. $phonebook["police"];
    $phonebook['hospital']='1108';
    echo $phonebook['hospital'];
    echo "<hr>";

    if(array_key_exists('police',$phonebook)){
        echo $phonebook['police'];
    }else{
        echo 'NUmber dont exists';
    }

?>
</body>
</html>