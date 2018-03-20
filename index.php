<?php
	require "nav.php";


//pokemons
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

// //result
echo "Pokemons :";
echo '<pre>';

print_r($pikachu);
echo '<pre>';

print_r($charmeleon);
echo '<pre>';

echo "--- Battle ---";

