<?php 

class Charmeleon extends Pokemon{

	public function __construct($name){		

		$this->name = $name;
		$this->energyType = new EnergyType('Fire');
		$this->hp = 60;
		$this->attacks =  [new Flare('Flare', 30), new HeadButt('HeadButt', 10)];
		$this->weakness = new Weakness('Water', 2);
		$this->resistance =  new Resistance('Lightning', 10);
	}
}