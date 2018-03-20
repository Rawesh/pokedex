<?php
	require "nav.php";

//pokemons
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');
$pokemon = new Pokemon();

// //result
echo "Pokemons :";
echo '<pre>';

echo $pikachu;
echo "<pre>";
 
echo $charmeleon;
echo "<pre>";

//battle: charmeleon attacks pikachu
echo "--- First move ---";
echo '<pre>';

// attack of a pokemon 2 arguments 1. the pokemon, 2. the attack 
$pokemon->attack($charmeleon, $charmeleon->attacks[0], $pikachu);
echo '<pre>';

//battle: pikachu attacks charmeleon
echo "--- Second move ---";
echo '<pre>';

// attack of a pokemon 2 arguments 1. the pokemon, 2. the attack 
$pokemon->attack($pikachu, $pikachu->attacks[0], $charmeleon);
echo '<pre>';







