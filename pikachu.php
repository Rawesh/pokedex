<?php 

class Pikachu extends Pokemon{

	public function __construct($name){		

		$this->name = $name;
		$this->energyType = new EnergyType('Lightning');
		$this->hp = 60;
		$this->attacks =  new Attack('Elektric Ring', 50, 'Pika Punch', 20);
		$this->weakness = new Weakness('Fire', 1.5);
		$this->resistance =  new Resistance('Fightning', 20);
	}
}