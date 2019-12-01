<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays in php</title>
</head>
<body>
    
    <?php
    $odd_numbers=[1,3,5,7,9];
    $i=0;
    for($i;$i<4;$i++){
        echo " Odd number is $odd_numbers[$i]<br>";
    }
    $even_numbers=[0,2,4,6,8,10];
    $x=0;
    // unset($even_numbers[0]);
    for($x=0;$x<5;$x++){
        echo " <br>Even numbers are $even_numbers[$x]";
    }
    echo '<br>count of the even numbers is '.count($even_numbers);
    echo"<hr>";
    $watched_movies=['DDLJ','7 Samurai'];
    array_push($watched_movies,'Sholay');
    echo" Watched Movies:-<br>";
    array_pop($watched_movies);
    
    for($mov=0;$mov<3;$mov++){
        echo "$watched_movies[$mov] <br>";
    }
    echo "<hr>";
    $final=array_merge($odd_numbers,$even_numbers);
    print_r($final);
?>
</body>
</html>