<?php
	require "nav.php";

//pokemons
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

//pokebag
$storage = new PokeBag;



// //result
echo "Pokemons :";
echo '<pre>';

echo $pikachu->name;
echo "<pre>";
 
echo $charmeleon->name;
echo "<pre>";

//battle: charmeleon attacks pikachu
echo "--- First move ---";
echo '<pre>';

// attack of a pokemon 2 arguments 1. the pokemon, 2. the attack 
$charmeleon->attack($charmeleon->attacks[0], $pikachu);
echo '<pre>';

//battle: pikachu attacks charmeleon
echo "--- Second move ---";
echo '<pre>';

// attack of a pokemon 2 arguments 1. the pokemon, 2. the attack 
$pikachu->attack($pikachu->attacks[0], $charmeleon);
echo '<pre>';

echo "---------- BAG ----------";
echo '<pre>';
//add
$storage->add($charmeleon);
$storage->add($pikachu);

// delete one
// $storage->deleteOne('Pikachu');

//delete all
// $storage->deleteAll();


$storage->showAll();





