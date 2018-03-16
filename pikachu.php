<?php 

class Pikachu extends Pokemon{

	public function __construct($name){		

		$this->name = $name;
		$this->energyType = new EnergyType('Lightning');
		$this->hp = 60;
		$this->attacks =  [new ElektricRing('Elektric Ring', 50), new PikaPunch('Pika Punch', 50)];
		$this->weakness = new Weakness('Fire', 1.5);
		$this->resistance =  new Resistance('Fightning', 20);
	}


}