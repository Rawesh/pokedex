<?php 

class Charmeleon extends Pokemon{

	public function __construct($name){		

		$this->name = $name;
		$this->energyType = new EnergyType('Fire');
		$this->hp = 60;
		$this->attacks =  [new Attack('Flare', 30), new Attack('HeadButt', 10)];
		$this->weakness = new Weakness(new EnergyType('Water'), 2);
		$this->resistance =  new Resistance(new EnergyType('Lightning'), 10);
	}
}