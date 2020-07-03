<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>class in php</title>
</head>
<body>

<?php


class game{
    var $price;
    var $name;
    var $photo;
    var $dir="/games";

    public function print_game(){
        echo $this->price;
        echo $this->name;
        echo $this->dir.$this->photo;

    }

}

$game = new game;

$game->name="Age of Empire";
$game->price=14.99;
$game->photo="yo.jpg";

$game->print_game();


?>
    
</body>
</html>