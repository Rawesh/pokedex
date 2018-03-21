<?php 

class Charmeleon extends Pokemon{

	public function __construct($name){		

		$this->name = $name; //name of pokemon
		$this->energyType = new EnergyType(EnergyType::FIRE); // energytype of pokemon
		$this->setHp(60); // hotpoints of pokemon
		$this->attacks =  [new Attack(Attack::FLARE, 30), new Attack(Attack::HEAD_BUTT, 10)]; // attacks of pokemon
		$this->weakness = new Weakness(new EnergyType(EnergyType::WATER), 2); // weakness of pokemon
		$this->resistance =  new Resistance(new EnergyType(EnergyType::LIGHTNING), 10); // resistance of pokemon
	}
}