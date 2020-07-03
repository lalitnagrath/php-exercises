<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New array exmaples</title>
</head>
<body>
    

    <?php
    const BR="<br>";
    define("release_year",2010);

    $bikes=array('350','500','NS');
    for($x=0;$x<=count($bikes);$x++){
        echo $bikes[$x]."<br>";
    }
    var_dump($bikes);
// trying another array

// print offic elcoations

$office= array('Sector 82','phase 9','WFH');

//print_r($office);
//var_dump($office);

    $items=count($office);
    echo $items;

    for($x=0;$x<=$items;$x++){
        echo $office[$x]."<br>" ;
    }

    // w3resource array execise
    $color=array('white','green','red','blue','black');

    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2] ." carpet, the ". $color[1]." lawn, the . $color[0] . house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

    // next exercise
    echo BR;
    $color1 = array('white','green','red');
    
    echo $color1[0].' , '.$color[1].' , '.$color[2];
    echo BR;
    echo "<ul><li>".$color1[1].'</li><li>'.$color1[2].'</li><li>'.$color1[0].'</li></ul>';

    foreach($color1 as $c){
        echo $c ." ";
    }

    $animals= array ('dog'=>'bow bow',
    'cat' =>'meow',
    'bear' =>'roars',
    'lion' => 'big roar'
);
    echo BR;
    foreach ($animals as $name =>$sound){
        echo $name .' '. $sound ."<br>";
    }

    $numbers=array(1,2,3,4,5);
    foreach ($numbers as $x){
        echo $x;
    }

    //youtube array examples
    $game_genres=array('rpg','adventure',array('action','new'),'adventure','fps');
    echo BR;
    echo $game_genres[2][0];
    echo $game_genres[2][1];

    echo print_r($game_genres[2]);
    echo BR;
    BR;
    echo '<pre>';
    $years= array('Starcraft'=>1998, "the witcher" =>release_year , "AOE"=>1995);

    print_r($years);


    //associatiove arrays 

    $arr = array('laliz','kunal','shaviz','rohit','sauba','depika');
    $assoc= array('a1' =>'800-820','a2'=>'821-840','a3'=>'841-860');

    foreach ($assoc as $a=>$y){
        echo $a . ' '. $y .'<br>';
    }

    ?>
</body>
</html>