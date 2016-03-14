<?php

$name = array('Nikita','Dima','Alex','Sergey','Vlad','Andrey','Artem','Ivan','Anton','Maxim','Oleg','Roman');

$surname = array('Melnyk','Shevchenko','Boyko','Kovalenko','Bondarenko','Tkachenko','Kovalchuk','Kravchenko','Oliynyk','Shevchuk','Polishchuk','Lysenko');

for($i=1; $i <= 30; $i++) {
    $players[$i]=array('name' => $name[array_rand($name, 1)],
        'surname' => $surname[array_rand($surname, 1)],
        'age' => rand(18, 60));}

echo "<h1> Игроки </h1>";
echo "<pre>";
print_r ($players);
echo "</pre>";

echo "<h1> Игра </h1>";

for($day=1; $day <= 30; $day++){
    $rand_players = array_rand($players, 1);
    $rand_player = $players[$rand_players];
    $player =" ";
    foreach($rand_player as $key => $value){

        if ($key == 'age'){
            $player = $player . ", " . "age - " . $value;
        }
        else{
            $player = $player . " " . $value;
        }
    }
    if ($day < 30) {
        echo "<pre>";
        print_r("Сегодня, $day.03.2016, игру покидает:" . "$player");
        echo "</pre>";
    }
    else
    {
        echo "<pre>";
        print_r("Победитель:" .  "$player");
        echo "</pre>";
    }
}


