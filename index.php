<?php
	require "nav.php";

//pokemons
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');
$pokemon = new Pokemon();

// //result
echo "Pokemons :";
echo '<pre>';

print_r($pikachu);
echo '<pre>';

print_r($charmeleon);
echo '<pre>';

echo "--- Attack ---";
echo '<pre>';

// attack of a pokemon 2 arguments 1. the pokemon, 2. the attack 
$pokemon->attack($charmeleon, $charmeleon->attacks[0], $pikachu);
echo '<pre>';







