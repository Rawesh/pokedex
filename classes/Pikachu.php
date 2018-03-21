<?php 

class Pikachu extends Pokemon{

	public function __construct($name){		

		$this->name = $name; // name of pokemon
		$this->energyType = new EnergyType('Lightning'); // energytype of pokemon
		$this->setHp(60); // hp of pokemon
		$this->attacks =  [new Attack('Elektric Ring', 50), new Attack('Pika Punch', 50)]; // attacks of pokemon
		$this->weakness = new Weakness(new EnergyType('Fire'), 1.5); //weakness of pokemon
		$this->resistance =  new Resistance(new EnergyType('Fightning'), 20); // resistance of pokemon
	}

}