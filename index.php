<?php
	require "pokemon.php";
	require "energyType.php";
	require "elektricRing.php";
	require "pikaPunch.php";
	require "flare.php";
	require "headButt.php";
	require "weakness.php";
	require "resistance.php";
	require "pikachu.php";
	require "charmeleon.php";


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

