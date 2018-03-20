<?php 

class Charmeleon extends Pokemon{

	public function __construct($name){		

		$this->name = $name; //name of pokemon
		$this->energyType = new EnergyType('Fire'); // energytype of pokemon
		$this->hp = 60; // hotpoints of pokemon
		$this->attacks =  [new Attack('Flare', 30), new Attack('HeadButt', 10)]; // attacks of pokemon
		$this->weakness = new Weakness(new EnergyType('Water'), 2); // weakness of pokemon
		$this->resistance =  new Resistance(new EnergyType('Lightning'), 10); // resistance of pokemon
	}
}