<?php 

class Pikachu extends Pokemon{

	public function __construct($name){		

		$this->name = $name;
		$this->energyType = new EnergyType('Lightning');
		$this->hp = 60;
		$this->attacks =  [new Attack('Elektric Ring', 50), new Attack('Pika Punch', 50)];
		$this->weakness = new Weakness(new EnergyType('Fire'), 1.5);
		$this->resistance =  new Resistance(new EnergyType('Fightning'), 20);
	}


}