<?php
	require "pokemon.php";

//pokemons
$pikachu = new pokemon('Pikachu', 'Lightning', 60, '[Elektric Ring, Pika Punch]', 'Fire', 'Fichtning');
$charmeleon = new pokemon('Charmeleon', 'Fire', 60, '[Headbutt, Flare]', 'Water', 'Lightning');

//result
echo "Pokemons :";
print_r('<pre>'. $pikachu . '</pre>');
print_r('<pre>'. $charmeleon . '</pre>');

// pikachu attacks charmeleon, the result of charmeleon hp
echo "Pikachu valt Charmeleon aan met Elektric Ring, Dit is het resultaat van Charmeleon hieronder:";
$charmeleon->hpCharmeleon();
print_r('<pre>'. 'De aanval had weinig effect op Charmeleon' . '</pre>');

// Charmeleon attacks pikachu, the result of pikachu hp
echo "Charmeleon valt pikachu nu aan met Flare, Dit is het resultaat van Pikachu hieronder:";
$pikachu->hpPikachu();
print_r('<pre>'. 'De aanval had veel effect op Pikachu, Pikachu houd weing hitpoints over' . '</pre>');